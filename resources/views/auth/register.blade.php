<!DOCTYPE html>
<html data-header-styles="light" data-menu-styles="light" data-nav-layout="vertical" data-theme-mode="light" data-toggled="close" data-vertical-style="overlay" dir="ltr" lang="en">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title> Register - ATM Forecast</title>

    <!-- Favicon -->
    <link href="{{ asset("images/brand-logos/favicon.ico") }}" rel="icon" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="{{ asset("js/authentication-main.js") }}"></script>

    <!-- Bootstrap Css -->
    <link href="{{ asset("libs/bootstrap/css/bootstrap.min.css") }}" id="style" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset("css/styles.min.css") }}" rel="stylesheet">

    <!-- Icons Css -->
    <link href="{{ asset("css/icons.min.css") }}" rel="stylesheet">

</head>

<body>

    {{-- container --}}
    <div class="container-lg">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                <div class="my-5 d-flex justify-content-center">
                    <a href="index.html">
                        <img alt="logo" class="desktop-logo" src="{{ asset("images/brand-logos/logo.png") }}">
                    </a>
                </div>
                <div class="card custom-card">
                    <div class="card-body p-5">
                        <p class="h5 fw-bold mb-2 text-center">Register</p>
                        <p class="mb-4 text-muted op-7 fw-normal text-center">Daftarkan akun anda</p>
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label class="form-label text-default" for="signup-firstname">First Name</label>
                                <input class="form-control form-control-lg" id="signup-firstname" placeholder="first name" type="text">
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label text-default" for="signup-lastname">Last Name</label>
                                <input class="form-control form-control-lg" id="signup-lastname" placeholder="last name" type="text">
                            </div>
                            <div class="col-xl-12">
                                <label class="form-label text-default" for="signup-password">Password</label>
                                <div class="input-group">
                                    <input class="form-control form-control-lg" id="signup-password" placeholder="password" type="password">
                                    <button class="btn btn-light" id="button-addon2" onclick="createpassword('signup-password',this)" type="button"><i class="ri-eye-off-line align-middle"></i></button>
                                </div>
                            </div>
                            <div class="col-xl-12 mb-2">
                                <label class="form-label text-default" for="signup-confirmpassword">Confirm Password</label>
                                <div class="input-group">
                                    <input class="form-control form-control-lg" id="signup-confirmpassword" placeholder="confirm password" type="password">
                                    <button class="btn btn-light" id="button-addon21" onclick="createpassword('signup-confirmpassword',this)" type="button"><i class="ri-eye-off-line align-middle"></i></button>
                                </div>
                                <div class="form-check mt-3">
                                    <input class="form-check-input" id="defaultCheck1" type="checkbox" value="">
                                    <label class="form-check-label text-muted fw-normal" for="defaultCheck1">
                                        By creating a account you agree to our <a class="text-success" href="terms_conditions.html"><u>Terms & Conditions</u></a> and <a class="text-success"><u>Privacy Policy</u></a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xl-12 d-grid mt-2">
                                <button class="btn btn-lg btn-primary">Create Account</button>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="fs-12 text-muted mt-3">Already have an account? <a class="text-primary" href="{{ route("login") }}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset("libs/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

    <!-- Show Password JS -->
    <script src="{{ asset("js/show-password.js") }}"></script>

</body>

</html>
