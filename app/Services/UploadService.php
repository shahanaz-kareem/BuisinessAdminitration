<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Product;
use App\Models\category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Productimage;
use App\Models\vedios;

class UploadService
{

    public function index()
    {

       $category = category::get();
       return view('user.product.upload',compact('category'));

         
    }
 public function store($request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'detail' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'user_id' => 'required|exists:users,id',
        'image_name.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'videos.*' => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:51200', // 50MB max
    ]);

    if ($validator->fails()) {
        return response()->json([
            'errors' => $validator->errors(),
        ], 422);
    }

    // Save base product
    $data = $request->only('name', 'detail', 'price', 'user_id');
    $product = Product::create($data);

    // Handle multiple image uploads
    if ($request->hasFile('image_name')) {
        foreach ($request->file('image_name') as $image) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/products'), $imageName);

            ProductImage::create([
                'product_id' => $product->id,
                'image_name' => $imageName,
            ]);
        }
    }

    // Handle multiple video uploads (if needed)
    if ($request->hasFile('videos')) {
        foreach ($request->file('videos') as $video) {
            $videoName = time() . '_' . $video->getClientOriginalName();
            $video->move(public_path('uploads/videos'), $videoName);

          
            $vedios = new vedios();
            $vedios->project_id = $product->id;
            $vedios->vedio_name = $imageName;
            $vedios->save();
        }
    }

    return response()->json([
        'message' => 'Product created successfully.',
        'product_id' => $product->id,
    ], 201);
}
}