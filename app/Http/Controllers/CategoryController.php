<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Models\category;

class CategoryController extends Controller
{
    protected $CategoryServices;
    function __construct(CategoryService $CategoryServices)

    {

         $this->CategoryServices = $CategoryServices;


    }
    public function index()

    {

        return $this->CategoryServices->index();
      

    }
     public function create()

    {

        return $this->CategoryServices->create();
      

    }
        public function store(Request $request)

    {

        return $this->CategoryServices->store($request);
      

    }

     public function edit(category $category)

    {
        return $this->CategoryServices->edit($category);

      
    }

     public function update(Request $request,category $category)

    {

        return $this->CategoryServices->update($request, $category);

       

    }
}
