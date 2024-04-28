<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Login Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="../assets/js/config.js"></script>
        <style>
            .authentication-inner {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
            .card {
                width: 400px;
                margin-right: 20px; /* Adjust the spacing between image and form */
            }
            .app-brand {
                margin-bottom: 20px; /* Adjust the spacing between logo and form */
            }
        </style>
    </head>
    <body>
        <!-- Content -->
        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    <!-- Register -->
                    <div class="card">
                        <div class="card-body">
                            <!-- Logo -->
                            <div class="app-brand justify-content-center">
                                <a href="index.html" class="app-brand-link gap-2">
                                    <span class="app-brand-logo demo">
                                        {{-- <img src="{{ asset('assets/images/login.jpg') }} alt="">                                </span> --}}
                                        <span class="app-brand-text demo text-body fw-bolder">Laundry Zaidan</span>
                                    </a>
                                </div>
                                <!-- /Logo -->
                                <h4 class="mb-2">Selamat datang!</h4>
                                <p class="mb-4">Anda harus melakukan Login terlebih dahulu</p>
                                <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="col-md-3 col-form-label text-md-end">{{ __('Username') }}</label>
                                        
                                        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 form-password-toggle">
                                        <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember-me" />
                                            <label class="form-check-label" for="remember-me"> Remember Me </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                                    </div>
                                </form>
                                {{-- <p class="text-center">
                                    <span>New on our platform?</span>
                                    <a href="{{ route('register') }}">
                                        <span>Create an account</span>
                                    </a>
                                </p> --}}
                            </div>
                        </div>
                        <!-- /Register -->
                    </div>
                    <div>
                        <!-- Image goes here -->
                    </div>
                </div>
            </div>
            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="../assets/vendor/libs/jquery/jquery.js"></script>
            <script src="../assets/vendor/libs/popper/popper.js"></script>
            <script src="../assets/vendor/js/bootstrap.js"></script>
            <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
            <script src="../assets/vendor/js/menu.js"></script>
            <!-- endbuild -->
            <!-- Vendors JS -->
            <!-- Main JS -->
            <script src="../assets/js/main.js"></script>
            <!-- Page JS -->
            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
        </body>
        </html>
        