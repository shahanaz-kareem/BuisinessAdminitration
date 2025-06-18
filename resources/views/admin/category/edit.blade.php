@extends('layouts.adminmaster')

@section('content')  

<div class="row mb-4">
    <div class="col-lg-6">
        <h2>Add New Category</h2>
    </div>
    <div class="col-lg-6 text-end">
        <a class="btn btn-primary" href="{{ route('category.index') }}">Back</a>
    </div>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <form id="categoryUpdateform" action="{{ route('category.update', $getCategory->id) }}" >
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Category Name -->
                    <div class="col-md-12 mb-3">
                        <input type="text" name="name" id="name" value="{{$getCategory->name}}" class="form-control" placeholder="Category Name" required>
                    </div>

                    <!-- Parent Category Dropdown -->
                    <div class="col-md-12 mb-3">
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="0">Parent Category</option>
                           @foreach($catList as $cat)
                            <option value="{{$cat->id}}" @if($getCategory->parent_id  == $cat->id ) selected @endif>{{$cat->name}}</option>
                           @endforeach
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-md-12 text-center">
                        <button type="submit" id="category-update" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@include('admin.js.category-update')
@endsection
