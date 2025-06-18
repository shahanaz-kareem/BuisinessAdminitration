<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Product;
use App\Models\Productimage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ProductService
{

    public function index()
    {

        $products = Product::latest()->paginate(5);

        return view('admin.products.index',compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    public function store($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'detail' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'user_id' => 'required',
            'image_name.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }
    
        $data = $request->only('name', 'detail', 'price', 'user_id','image_name');
        $product = Product::create($data);
       
        if ($request->hasFile('image_name')) {
            foreach ($request->file('image_name') as $image) {
                $imageName = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/products'), $imageName);

                // Save to DB if needed
                ProductImage::create([
                    'product_id' => $product->id,
                    'image_name' => $imageName,
                ]);
            }
        }
    
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Product created successfully.',
                'product_id' => $product->id,
            ], 201);
        }
    
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }
    

    public function update($request, $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
           'detail' => 'nullable|string',
            'image_name.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // max 5MB each
        ]);

  
        $product = Product::findOrFail($product->id);

        // Update product basic fields
        $product->name = $request->name;
        $product->price = $request->price;
        $product->detail = $request->detail;
        $product->approval_status = $request->approval_status;
        $product->save();

        // Handle removed images
        $removedImages = $request->input('removed_images', '');
        if ($removedImages) {
            $removedImageIds = explode(',', $removedImages);
            foreach ($removedImageIds as $imageId) {
                $image = ProductImage::find($imageId);
                if ($image) {
                    // Delete image file from storage
                    $imagePath = public_path('uploads/products/' . $image->image_name);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }

                    // Delete DB record
                    $image->delete();
                }
            }
        }

        // Handle newly uploaded images
        if ($request->hasFile('image_name')) {
            foreach ($request->file('image_name') as $uploadedImage) {
                $filename = time() . '_' . uniqid() . '.' . $uploadedImage->getClientOriginalExtension();
                $uploadedImage->move(public_path('uploads/products'), $filename);

                // Save in DB
                $product->images()->create([
                    'image_name' => $filename,
                ]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function approve($request){
       
        $approve = Product::find($request->id);
        $approve->approval_status = $request->status;
        $approve->save();

        return response()->json(['success' => true, 'message' => 'Success']);
    }
    
    public function showProductdetails($id)
    {
       
        $product =product::with('images')->find($id);
       
        return view('user.product.detail',compact('product'));
    }

    public function edit($product){

        $product->with('images')->find($product->id);
      
        return view('admin.products.edit',compact('product'));

    }
    

}