<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\proffesional_category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ProffesionalCategoryService
{

    public function index()
    {

       $category = proffesional_category::get();
       return view('admin.proffesion.index',compact('category'));

         
    }
     public function create()
    {

       return view('admin.proffesion.create');

         
    }
    public function store($request)
    { 
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:proffesional_categories,name',
        ]);

   

        $category = new proffesional_category();
        $category->name = $validated['name'];
     
        $category->save();

        return redirect()->route('proffesion.index')->with('success', 'Proffession created successfully.');
    }
      public function edit($proffesion){

        $getCategory = proffesional_category::find($proffesion->id);
   
        return view('admin.proffesion.edit',compact('getCategory'));

    }


  public function update($request, $proffesion)
    {
       
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $proffesion->id,
        ]);

      
        $proffesion->name = $validated['name'];
     
        $proffesion->save();

        return redirect()->route('proffesion.index')->with('success', 'proffesion updated successfully.');
    }
}