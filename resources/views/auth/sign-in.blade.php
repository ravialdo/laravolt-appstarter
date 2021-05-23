<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)
* License (https://themes.getbootstrap.com/licenses/)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head> 
    <x-partials.header title="Sign-in"/>
</head>

<body>

    <main>

        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <p class="text-center"><a href="#" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Kembali ke halaman utama</a></p>
                <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('mg/illustrations/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Masuk ke platform kami</h1>
                            </div>
                            <form action="{{ route('login.process') }}" method="post" class="mt-4">

							@csrf
							
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="contoh@perusahaan.com" value="{{ old('email') }}" autofocus>
							</div>
							<div class="text-danger mt-1" style="font-size:13px !important;">
								@error('email')
									{{ $message }}
								@enderror
							</div>
                                </div>
                                <!-- End of Form -->

                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                                        </div>  
								<div class="text-sm text-danger mt-1" style="font-size:13px !important;">
								@error('password')
									{{ $message }}
								@enderror
							</div>
                                    </div>
                                    <!-- End of Form -->

                                    <div class="d-flex justify-content-between align-items-top mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="{{ old('remember') }}" id="remember">
                                            <label class="form-check-label mb-0" for="remember">
                                              Ingat saya
                                            </label>
                                        </div>
                                        <div><a href="#" class="small text-right">Lupa password?</a></div>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark">Masuk</button>
                                </div>
                            </form>
                            <div class="mt-3 mb-4 text-center">
                                <span class="fw-normal">atau masuk dengan</span>
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
                                    Belum Terdaftar?
                                    <a href="{{ route('app.register') }}" class="fw-bold">Buat Akun</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-partials.scripts/>
    
</body>

</html>
