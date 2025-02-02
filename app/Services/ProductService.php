<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Product;

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

        request()->validate([

            'name' => 'required',

            'detail' => 'required',

        ]);

    

        Product::create($request->all());

    

        return redirect()->route('products.index')

                        ->with('success','Product created successfully.');

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

}