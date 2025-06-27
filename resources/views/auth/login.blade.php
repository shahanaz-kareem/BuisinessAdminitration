@extends('layouts.app')

@section('content')


    <section class="ftco-appointment ftco-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 mb-5 heading-section text-center ftco-animate">
                    <span class="subheading">Stylistic</span>
                    <h2 class="mb-4">Sign in</h2>
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
                    <form id="loginForm" method="POST">
                        @csrf

                        <div class="form-group text-center">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="d-md-flex">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control" name="email"
                                                placeholder="Email" required>
                                            <span class="text-danger error-text email_error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="d-md-flex">
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control" name="password"
                                                placeholder="Password" required>
                                            <span class="text-danger error-text password_error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary py-3 px-4">
                                            Login
                                        </button>
                                        <div class="links">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Forgot Password</a>
                                            @endif
                                            <br>
                                            <a href="{{ route('register') }}">Signup</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#loginForm').on('submit', function (e) {
            e.preventDefault();

            $('.error-text').text('');

            let formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: "{{ route('login') }}",
                data: formData,
                success: function (response) {
                    window.location.href = response.redirect || "/";
                },
                error: function (xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $('.' + key + '_error').text(value[0]);
                        });
                    } else {
                        alert('Something went wrong.');
                    }
                }
            });
        });

    </script>
@endsection