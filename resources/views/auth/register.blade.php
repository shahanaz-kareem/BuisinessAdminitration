@extends('layouts.app')

@section('content')

    <section class="ftco-appointment ftco-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5 heading-section text-center ftco-animate">
                    <span class="subheading">Stylistic</span>
                    <h2 class="mb-4">Register</h2>
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span>Website:</span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 appointment ftco-animate">
                    <form method="POST" action="{{ route('register') }}" class="appointment-form"
                        enctype="multipart/form-data">
                        <input type="hidden" name="user_type" value="3">
                        @csrf


                        <!-- Profile Picture Upload with Round Preview -->
                        <div class="form-group text-center">
                            <label for="profile_picture" style="cursor: pointer;">
                                <div class="profile-preview" id="profilePreview">
                                    <img src="{{ asset('uploads/profile.webp') }}" alt="Profile Preview" id="previewImage">
                                </div>
                            </label>
                            <input type="file" id="profile_picture" name="profile_picture"
                                class="d-none @error('profile_picture') is-invalid @enderror" accept="image/*"
                                onchange="previewProfileImage(event)">
                            @error('profile_picture')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="d-md-flex">
                                    <div class="form-group">
                                        <input id="name" type="text" placeholder="Your name"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select class="form-control select2" name="country" id="country" required
                                            data-placeholder="Select Country">
                                            <option></option>
                                            @foreach($country as $countries)
                                                <option value=" {{$countries->id}}">{{$countries->name}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select class="form-control select2" name="state" id="state" required
                                            data-placeholder="Select State">
                                            <option></option>

                                        </select>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select class="form-control select2" name="city" id="city" required
                                            data-placeholder="Select City">
                                            <option></option>

                                        </select>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <select name="cat_id" id="cat_id" class="form-control select2" required
                                            data-placeholder="Select category">
                                            <option value=""></option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('cat_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email"
                                            Placeholder="Your email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <textarea id="address" class="form-control custom-textarea" name="address"
                                            placeholder="Your address"></textarea>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-me-flex">
                                    <div class="form-group">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Password" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm password">
                                </div>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group">

                                    <button type="submit" id="submit" class="btn btn-primary py-3 px-4">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <style>
        /* Select2 selected text */
        .select2-container--default .select2-selection--single {
            color: #000;
            /* black */
            height: 58px;
        }

        /* Dropdown items */
        .select2-container--default .select2-results__option {
            color: #000;
            /* black */
            height: 58px;
        }

        /* Placeholder (optional) */
        .select2-container--default .select2-selection--single .select2-selection__placeholder {
            color: #000;
            /* black */
            height: 58px;
        }

        /* Match font style for Select2 to inputs */
        .select2-container--default .select2-selection--single {
            font-family: "Vidaloka", Arial, serif;
            font-size: 16px;
            color: #000;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            border: 1px solid #ccc;
            background-color: #fff;
        }

        /* Match placeholder */
        .select2-selection__placeholder {
            text-align: center;
            width: 100%;
        }

        /* Match selected text */
        .select2-selection__rendered {
            text-align: center;
            width: 100%;
        }

        /* Move clear (×) button to the left */
        .select2-container--default .select2-selection--single .select2-selection__clear {
            position: absolute;
            left: 10px;
            right: auto;
            color: #000;
            font-size: 16px;
        }

        .profile-preview {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 10px;
            border: 2px solid #ccc;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .custom-textarea {}
    </style>
    <script>
        $(document).ready(function () {

            $('form').on('submit', function (e) {
                e.preventDefault();

                // Clear previous errors
                $('.is-invalid').removeClass('is-invalid');
                $('.text-danger').remove();

                let formData = new FormData(this); // ✅ This includes CSRF token automatically

                $.ajax({
                    type: 'POST',
                    url: '{{ route("register") }}',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
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


            $('#country').on('change', function () {
                var countryID = $(this).val();
                if (countryID) {
                    $.ajax({
                        url: '/get-states/' + countryID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#state').empty().append('<option value="">Select State</option>');
                            $('#city').empty().append('<option value="">Select City</option>');
                            $.each(data, function (key, value) {
                                $('#state').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#state').empty().append('<option value="">Select State</option>');
                    $('#city').empty().append('<option value="">Select City</option>');
                }
            });

            // Load cities based on state
            $('#state').on('change', function () {
                var stateID = $(this).val();
                if (stateID) {
                    $.ajax({
                        url: '/get-cities/' + stateID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#city').empty().append('<option value="">Select City</option>');
                            $.each(data, function (key, value) {
                                $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#city').empty().append('<option value="">Select City</option>');
                }
            });
        });

        function previewProfileImage(event) {
            const reader = new FileReader();
            reader.onload = function () {
                const preview = document.getElementById('previewImage');
                preview.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection