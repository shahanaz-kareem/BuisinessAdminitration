@extends('layouts.adminmaster')

@section('content')  

<div class="row mb-4">
    <div class="col-lg-6">
        <h2>Update Proffesion</h2>
    </div>
    <div class="col-lg-6 text-end">
        <a class="btn btn-primary" href="{{ route('proffesion.index') }}">Back</a>
    </div>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <form id="proffessionUpdateform" action="{{ route('proffesion.update', $getCategory->id) }}" >
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Category Name -->
                    <div class="col-md-12 mb-3">
                        <input type="text" name="name" id="name" value="{{$getCategory->name}}" class="form-control" placeholder="Category Name" required>
                    </div>

                   
                    <!-- Submit Button -->
                    <div class="col-md-12 text-center">
                        <button type="submit" id="proffesion-update" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@include('admin.js.proffesion-create')
@endsection
