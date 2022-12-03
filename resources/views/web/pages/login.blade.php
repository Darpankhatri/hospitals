@extends('web.layout.master')

@section('content')
    <main>

        <!-- Start Page Banner Area -->
        <div class="page-banner-area bg-22 pt-100">
            <div class="container">
                <div class="page-banner-content">
                    <h2>My Account</h2>
                    <ul>
                        <li>
                            <a href="{{ route('web.index') }}">
                                <i class="ri-home-8-line"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <span>Login</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start My Account Area -->
        <div class="my-account-area ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form class="login-register-form-area login" method="POST" action="{{ route('user.login') }}">
                            @csrf
                            <h2>Login</h2>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="info@bexi.com" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="******" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="d-flex align-items-center">
                                <button type="submit" class="default-btn me-3">
                                    Login
                                </button>
                                <p>Don’t have an account? <a href="{{ route('web.register') }}">Register now</a></p>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- End My Account Area -->


    </main>
@endsection


@section('css')
@endsection

@section('js')
@endsection
