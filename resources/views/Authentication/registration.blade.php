@extends('Template.auth')
@section('content')
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="d-flex justify-content-center">
                            <img src="assets/img/icons/website.png" alt="logo.jpeg" width="100" height="100">
                        </div>
                        <div class="app-brand justify-content-center">
                            <a href="index.html" class="app-brand-link gap-2">
                                <span class="app-brand-text demo text-body fw-bold text-uppercase">Registration</span>
                            </a>
                        </div>

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
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                    id="email" name="email" placeholder="Enter your email" />
                                @if ($errors->first('email'))
                                    <div id="validationServer05Feedback" class="invalid-feedback">
                                        <small class="text-danger position-absolute">{{ $errors->first('email') }}</small>
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="form-label" for="password1">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password1"
                                                class="form-control  {{ $errors->first('password1') ? 'is-invalid' : '' }}"
                                                name="password1" placeholder="Enter your password"
                                                aria-describedby="password" />
                                            @if ($errors->first('password1'))
                                                <div id="validationServer05Feedback" class="invalid-feedback">
                                                    <small class="text-danger">{{ $errors->first('password1') }}</small>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="password2">Repeat password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password2"
                                                class="form-control  {{ $errors->first('password2') ? 'is-invalid' : '' }}"
                                                name="password2" placeholder="Enter your password"
                                                aria-describedby="password" />
                                            @if ($errors->first('password2'))
                                                <div id="validationServer05Feedback" class="invalid-feedback">
                                                    <small class="text-danger">{{ $errors->first('password2') }}</small>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);">privacy policy & terms</a>
                                    </label>
                                </div>
                            </div> --}}
                            <button class="btn bg-btn d-grid w-100">Sign up</button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="login">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>

        </div>
        {{-- toast --}}
        @if (session('status'))
            <div class="bs-toast toast fade show bg-success position-absolute bottom-0 end-0 m-3" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <div class="me-auto fw-medium">Congratulations</div>
                    <small>11 mins ago</small>
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
