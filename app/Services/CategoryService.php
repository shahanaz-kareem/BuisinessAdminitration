<?php

namespace App\Services;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Product;
use App\Models\category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class CategoryService
{

    public function index()
    {

       $category = category::get();
       return view('admin.category.index',compact('category'));

         
    }
     public function create()
    {

       $category = category::get();
       return view('admin.category.create',compact('category'));

         
    }
    public function store($request)
    { 
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ]);

        $parent_id = $request->input('parent_id');

        // Convert 0 or invalid values to null before saving
        if (empty($parent_id) || $parent_id == 0 || $parent_id == -1) {
            $parent_id = null;
        }

        $category = new Category();
        $category->name = $validated['name'];
        $category->parent_id = $parent_id;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }
      public function edit($category){

        $catList = category::get();
        $getCategory = $category->find($category->id);
      
        return view('admin.category.edit',compact('getCategory','catList'));

    }


  public function update($request, $category)
    {
       
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        ]);

        $parent_id = $request->input('parent_id');

        $category->name = $validated['name'];
        $category->parent_id = ($parent_id && $parent_id > 0) ? $parent_id : null;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }
}