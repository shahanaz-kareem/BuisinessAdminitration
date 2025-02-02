<?php

    

namespace App\Http\Controllers;

    


use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Http\RedirectResponse;

use App\Services\ProductService;
use App\Models\Product;

    

class ProductController extends Controller

{ 

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */
    protected $ProductServices;
    function __construct(ProductService $ProductServices)

    {

         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);

         $this->middleware('permission:product-create', ['only' => ['create','store']]);

         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:product-delete', ['only' => ['destroy']]);

         $this->ProductServices = $ProductServices;

    }
  

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(): View

    {

        return $this->ProductServices->index();
      

    }

    

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create(): View

    {

        return view('admin.products.create');

    }

    

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request): RedirectResponse

    {
        return $this->ProductServices->store($request);


    }

    

    /**

     * Display the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(Product $product): View

    {

        return view('admin.products.show',compact('product'));

    }

    

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(Product $product): View

    {

        return view('admin.products.edit',compact('product'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request,Product $product): RedirectResponse

    {

        return $this->ProductServices->update($request, $product);

       

    }

    

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(Product $product): RedirectResponse

    {

        $product->delete();

    

        return redirect()->route('products.index')

                        ->with('success','Product deleted successfully');

    }

    public function approve(Request $request)
    {

      
        return $this->ProductServices->approve($request);


    }
}