@extends('layouts.adminmaster')

@section('content')

<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2>Edit Product</h2>
        <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
    </div>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <form id="productUpdateForm" method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="approval_status" value="pending">
                <input type="hidden" name="removed_images" id="removed_images" value="">

                <div class="form-group mb-3">
                    <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group mb-3">
                    <input type="number" id="price" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price" required>
                </div>

                <div class="form-group mb-4">
                    <textarea id="detail" name="detail" class="form-control" rows="5" placeholder="Detail" required>{{ $product->detail }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label><strong>Current Images:</strong></label><br>

                    @if($product->images && $product->images->isNotEmpty())
                        @foreach($product->images as $image)
                            <div class="position-relative d-inline-block me-3 mb-2 existing-image" id="current-image-{{ $image->id }}" style="max-width: 200px;">
                                <img src="{{ asset('uploads/products/' . $image->image_name) }}" alt="Product Image" class="img-thumbnail" style="width: 100%;">
                                <button type="button"
                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 remove-existing-image-btn"
                                        data-image-id="{{ $image->id }}"
                                        style="padding: 0 6px; line-height: 1;">
                                    &times;
                                </button>
                            </div>
                        @endforeach
                    @else
                        <p>No image uploaded.</p>
                    @endif

                    <div class="col-md-12 mt-3">
                        <label for="images"><strong>Upload New Images:</strong></label>
                        <input type="file" name="image_name[]" id="images" class="form-control" multiple>
                        <div id="image-preview" class="mt-3 d-flex flex-wrap gap-3"></div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" id="product-update" class="btn btn-primary px-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>


@include('admin.js.product-edit')

@endsection
