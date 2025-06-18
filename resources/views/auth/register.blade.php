
@extends('layouts.app')

@section('content')  

<div class="container">
        <form method="POST" action="{{ route('register') }}">
            <input type="hidden" name="user_type" value="3">
        @csrf
            <h2>Register</h2>
            <div class="inputBox">
            <label for="">Name</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
             
            </div>
             <div class="inputBox">
                <label for="cat_id">Category</label>
                <select name="cat_id" id="cat_id" class="form-control select2" required>
                    <option value=""></option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('cat_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="inputBox">
            <label for="">Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">             
            </div>
           
            <div class="inputBox">
            <label for="">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
             
            </div>
            <div class="inputBox">
            <label for="">Confirm password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
             
            </div>
            <button type="submit" id="submit" class="btn btn-primary">
                                    {{ __('Register') }}
            </button> 
            <div class="links">
        
                
                <a href="{{ route('login') }}">Sign in</a>
            </div>
            
                                  
            </form>
 
</div>
<script>
    $(document).ready(function () {
       
        $('form').on('submit', function (e) {
            e.preventDefault(); 

            // Clear previous errors
            $('.is-invalid').removeClass('is-invalid');
            $('.text-danger').remove();

            let formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: '{{ route("register") }}',
                data: formData,
                success: function (response) {
                    // Redirect or show success message
                    window.location.href = response.redirect || "/";
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        for (let field in errors) {
                            let input = $('[name="' + field + '"]');
                            input.addClass('is-invalid');
                            input.after('<span class="text-danger">' + errors[field][0] + '</span>');
                        }
                    } else {
                        alert('Something went wrong. Please try again.');
                    }
                }
            });
        });
    });
</script>
@endsection



