<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <x-partials._head title="Sign-up"/>
</head>

<body>

    <main>

        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <p class="text-center"><a href="#" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Back to homepage</a></p>
                <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('mg/illustrations/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="mb-4 mb-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Create an account</h1>
						
                            </div>
                            <form action="{{ route('register.process') }}" method="post">

							@csrf
							
						  <!-- Form -->
                                <div class="form-group mb-4">
                                    <label >First Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-user"></span></span>
                                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name') }}" autofocus>
                                    </div>
							<div class="text-danger">
								@error('first_name')
									{{ $message }}
								@enderror
							</div>
                                </div>
                                <!-- End of Form -->
						  <!-- Form -->
                                <div class="form-group mb-4">
                                    <label>Last Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-user"></span></span>
                                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name') }}">
                                    </div>  
							<div class="text-danger">
								@error('last_name')
									{{ $message }}
								@enderror
							</div>
                                </div>
                                <!-- End of Form -->
						  <!-- Form -->
                                <div class="form-group mb-4">
                                    <label>Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-at"></span></span>
                                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                                    </div>  
							<div class="text-danger">
								@error('username')
									{{ $message }}
								@enderror
							</div>
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label>Your Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@company.com" value="{{ old('email') }}">
                                    </div>  
							<div class="text-danger">
								@error('email')
									{{ $message }}
								@enderror
							</div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label>Your Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" name="password" placeholder="Password" class="form-control	 @error('password') is-invalid @enderror" value="{{ old('password') }}">
                                        </div> 
								<div class="text-danger">
								@error('password')
									{{ $message }}
								@enderror
							</div>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label>Confirm Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control @error('confirm_password') is-invalid @enderror" value="{{ old('confirm_password') }}">
                                        </div>  
								<div class="text-danger">
								@error('confirm_password')
									{{ $message }}
								@enderror
							</div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-check mb-4">
                                        <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms">
                                        <label class="form-check-label">
                                            I agree to the <a href="#">terms and conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark">Sign in</button>
                                </div>
                            </form>
                            <div class="mt-3 mb-4 text-center">
                                <span class="fw-normal">or</span>
                            </div>
                            <div class="d-flex justify-content-center my-4">
                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-facebook me-2" type="button" aria-label="facebook button" title="facebook button">
                                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                                </a>
                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-twitter me-2" type="button" aria-label="twitter button" title="twitter button">
                                    <span aria-hidden="true" class="fab fa-twitter"></span>
                                </a>
                                <a href="#" class="btn btn-icon-only btn-pill btn-outline-gray-400 text-facebook" type="button" aria-label="github button" title="github button">
                                    <span aria-hidden="true" class="fab fa-github"></span>
                                </a>
                            </div>
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Already have an account?
                                    <a href="{{ route('app.login') }}" class="fw-bold">Login here</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-partials._scripts/>
    
</body>

</html>
