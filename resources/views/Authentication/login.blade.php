@extends('Template.auth')
@section('content')
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="d-flex justify-content-center">
                            <img src="assets/img/icons/website.png" alt="logo.jpeg" width="100" height="100">
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-text demo text-body fw-bold text-uppercase">Login</span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        <form id="formAuthentication" class="mb-3" action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text"
                                    class="form-control {{ $errors->first('username') ? 'is-invalid' : '' }}" id="username"
                                    name="username" placeholder="Enter your username" autofocus />
                                @if ($errors->first('username'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        <small
                                            class="text-danger position-absolute">{{ $errors->first('username') }}</small>
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    {{-- <a href="auth-forgot-password-basic.html">
                                        <small>Forgot Password?</small>
                                    </a> --}}
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password"
                                        class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                        name="password" placeholder="password . . ." aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    @if ($errors->first('password'))
                                        <div id="validationServer05Feedback" class="invalid-feedback">
                                            <small
                                                class="text-danger position-absolute">{{ $errors->first('password') }}</small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"><small> Remember Me </small></label>
                                </div>
                            </div> --}}
                            <div class="mb-3">
                                <button class="btn d-grid w-100 bg-btn" type="submit">Signin</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="registration">
                                <span>Create an account</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
        {{-- toast --}}
        @if (session('status'))
            <div class="bs-toast toast fade show bg-danger position-absolute top-0 end-0 m-3" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-medium">{{ session('status') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('message') }}
                </div>
            </div>
        @endif
    </div>

    <!-- / Content -->
@endsection
