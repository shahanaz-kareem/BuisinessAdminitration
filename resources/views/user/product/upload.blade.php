	
@extends('layouts.app')

@section('content')  

<section id="contact" class="subscription">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="subscription-input-group">
          <form id="projectForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                <div class="row">
                    <!-- Name -->
                    <div class="col-md-12 mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Project Name">
                    </div>

                    <!-- Price -->
                    <!-- <div class="col-md-12 mb-3">
                        <input type="number" name="price" id="price" class="form-control" placeholder="Price">
                    </div> -->

                    <!-- Detail -->
                    <div class="col-md-12 mb-3">
                        <textarea name="detail" class="form-control" rows="5" placeholder="Project Description"></textarea>
                    </div>
                  <label for="cat_id">Category</label>
                    <select name="cat_id" id="cat_id" class="form-control select2" required>
                        <option value=""></option>
                        @foreach ($category as $categories)
                            <option value="{{ $categories->id }}">
                                {{ $categories->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('cat_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="col-md-12 mb-4">
                       <label for="videos" class="form-label">Project Images</label>
                        <input type="file" name="image_name[]" id="images" class="form-control" multiple>
                        <div id="image-preview" class="mt-3 d-flex flex-wrap gap-3"></div>
                    </div>
                    <!-- Submit Button -->
                      <div class="mb-3">
                        <label for="videos" class="form-label">Project Videos</label>
                        <input class="form-control" type="file" id="videos" name="videos[]" accept="video/*" multiple>
                      </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary" id="product-save">Submit</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</section>


@include('user.js.upload')
@endsection