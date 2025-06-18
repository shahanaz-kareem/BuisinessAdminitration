<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProffesionalCategoryService;
use App\Models\proffesional_category;

class ProffesionalCategoryController extends Controller
{
   protected $ProffessionalCategoryServices;
    function __construct(ProffesionalCategoryService $ProffessionalCategoryServices)

    {

         $this->ProffessionalCategoryServices = $ProffessionalCategoryServices;


    }
    public function index()

    {

        return $this->ProffessionalCategoryServices->index();
      

    } public function create()

    {

        return $this->ProffessionalCategoryServices->create();
      

    }
       public function store(Request $request)

    {

        return $this->ProffessionalCategoryServices->store($request);
      

    }
    public function edit(proffesional_category $proffesion)

    {
     
         return $this->ProffessionalCategoryServices->edit($proffesion);

      
    }
  public function update(Request $request,proffesional_category $proffesion)

    {

        return $this->ProffessionalCategoryServices->update($request, $proffesion);

       

    }
}
