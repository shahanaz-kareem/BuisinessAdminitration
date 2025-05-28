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
            'user_id' => 'required|exists:users,id',
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
                $file = $request->file('image_name');
                $path = $file->store('uploads/product_images', 'public');
           
                $fileName = basename($path);
                Productimage::create([
                    'product_id' => $product->id,
                    'image_name' => $fileName,
                ]);
           
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
        request()->validate([

            'name' => 'required',

            'detail' => 'required',

        ]);

    

        $product->update($request->all());

    

        return redirect()->route('products.index')

                        ->with('success','Product updated successfully');
    }

    public function approve($request){
       
        $approve = Product::find($request->id);
        $approve->approval_status = $request->status;
        $approve->save();

        return response()->json(['success' => true, 'message' => 'Success']);
    }
    
    public function showProductdetails()
    {
        return view('user.product.detail');
    }

    public function edit($product){

        $product->with('images')->find($product->id);
      
        return view('admin.products.edit',compact('product'));

    }

}