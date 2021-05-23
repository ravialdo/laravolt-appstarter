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
    <x-partials.header title="Sign-up"/>
</head>

<body>

    <main>

        <!-- Section -->
        <section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
            <div class="container">
                <p class="text-center"><a href="#" class="text-gray-700"><i class="fas fa-angle-left me-2"></i> Kembali ke halaman utama</a></p>
                <div class="row justify-content-center form-bg-image" data-background-lg="{{ asset('mg/illustrations/signin.svg') }}">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="mb-4 mb-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Buat Sebuah Akun</h1>
						
                            </div>
                            <form action="{{ route('register.process') }}" method="post">

							@csrf
							
						  <!-- Form -->
                                <div class="form-group mb-4">
                                    <label >Nama Depan</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-user"></span></span>
                                        <input type="text" name="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" placeholder="Nama Depan" value="{{ old('nama_depan') }}" autofocus>
                                    </div>
							<div class="text-danger mt-1" style="font-size:13px !important;">
								@error('nama_depan')
									{{ $message }}
								@enderror
							</div>
                                </div>
                                <!-- End of Form -->

						  <!-- Form -->
                                <div class="form-group mb-4">
                                    <label>Nama Belakang</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-user"></span></span>
                                        <input type="text" name="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" placeholder="Nama Belakang" value="{{ old('nama_belakang') }}">
                                    </div>  
							<div class="text-danger mt-1" style="font-size:13px !important;">
								@error('nama_belakang')
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
							<div class="text-danger mt-1" style="font-size:13px !important;">
								@error('username')
									{{ $message }}
								@enderror
							</div>
                                </div>
                                <!-- End of Form -->

                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="contoh@perusahaan.com" value="{{ old('email') }}">
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
                                        <label>Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" name="password" placeholder="Password" class="form-control	 @error('password') is-invalid @enderror" value="{{ old('password') }}">
                                        </div> 
								<div class="text-danger mt-1" style="font-size:13px !important;">
								@error('password')
									{{ $message }}
								@enderror
							</div>
                                    </div>
                                    <!-- End of Form -->

                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label>Konfirmasi Password</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            <input type="password" name="konfirmasi_password" placeholder="Konfirmasi Password" class="form-control @error('konfirmasi_password') is-invalid @enderror" value="{{ old('konfirmasi_password') }}">
                                        </div>  
								<div class="text-danger mt-1" style="font-size:13px !important;">
								@error('konfirmasi_password')
									{{ $message }}
								@enderror
							</div>
                                    </div>
                                    <!-- End of Form -->

                                    <div class="form-check mb-4">
                                        <input class="form-check-input @error('terms') is-invalid @enderror" type="checkbox" name="terms">
                                        <label class="form-check-label">
                                            Saya menyetujui <a href="#">syarat dan ketentuan</a>
                                        </label>
                                    </div>

                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark">Buat</button>
                                </div>
                            </form>
                            <div class="mt-3 mb-4 text-center">
                                <span class="fw-normal">atau</span>
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
                                    sudah memiliki akun?
                                    <a href="{{ route('app.login') }}" class="fw-bold">Masuk disini</a>
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
