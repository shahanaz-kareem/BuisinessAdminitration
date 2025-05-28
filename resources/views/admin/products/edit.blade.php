@extends('layouts.adminmaster')

@section('content')

<div class="row mb-4">
    <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <h2>Edit Product</h2>
        <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul class="mt-2 mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <input type="hidden" name="approval_status" value="pending">

                <div class="form-group mb-3">
                    <input type="text" id="name" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>

                <div class="form-group mb-3">
                    <input type="number" id="price" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
                </div>

                <div class="form-group mb-4">
                    <textarea id="detail" name="detail" class="form-control" rows="5" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label><strong>Current Image:</strong></label><br>

                    @if($product->images && $product->images->isNotEmpty())
                        @foreach($product->images as $image)
                            <div class="position-relative d-inline-block me-3 mb-2" id="current-image-{{ $image->id }}">
                            <img src="{{ Storage::url('uploads/product_images/' . $image->image_name) }}" alt="Product Image" class="img-thumbnail" style="max-width: 200px;">

                                <button type="button"
                                        class="btn btn-danger btn-sm position-absolute top-0 end-0 remove-image-btn"
                                        data-image-id="{{ $image->id }}">
                                    &times;
                                </button>
                            </div>
                        @endforeach
                    @else
                        <p>No image uploaded.</p>
                    @endif

                    <div class="mt-3">
                        <input type="file" name="image_name" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary px-4">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.remove-image-btn').forEach(function (button) {
            button.addEventListener('click', function () {
                const imageId = this.dataset.imageId;
                const container = document.getElementById(`current-image-${imageId}`);
                if (container) container.remove();
                // Optionally, send AJAX to remove image from DB
            });
        });
    });
</script>
@endpush
