@extends('masyarakat.layout.master')
@section('content')
<main class="page-auth">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <section class="auth-wrapper">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2 class="auth-section-title">Create account</h2>
                            <p class="auth-section-subtitle">Create your account to continue.</p>
                            <form action="/login.html" method="POST">
                                <div class="form-group">
                                    <label for="nik">NIK <sup>*</sup></label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label"><b>Jenis Kelamin</b> <sup>*</sup></label>
                                    <div class="d-flex">
                                        <div class="form-check me-5">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="laki-laki">
                                            <label class="form-check-label" for="laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check ms-5">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir">Tanggal Lahir <sup>*</sup></label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_masyarakat">Alamat <sup>*</sup></label>
                                    <input type="text" class="form-control" id="alamat_masyarakat" name="alamat_masyarakat" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="tlpn_masyarakat">Nomor Telepon <sup>*</sup></label>
                                    <input type="text" class="form-control" id="tlpn_masyarakat" name="tlpn_masyarakat" placeholder="Masukkan Nomor Telepon">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <sup>*</sup></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password <sup>*</sup></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <button class="btn btn-primary btn-auth-submit" type="submit">Create account</button>
                            </form>
                            <p class="mb-0">
                                <a href="/login" class="text-dark font-weight-bold">Already have an acocunt? Sign in</a>
                            </p>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <img src="{{asset('assets/images/Register.png')}}" alt="login" class="img-fluid">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
