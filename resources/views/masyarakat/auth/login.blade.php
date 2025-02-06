@extends('masyarakat.layout.master')
@section('content')
<main class="page-auth">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <section class="auth-wrapper">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0">
                            <h2 class="auth-section-title">Log In</h2>
                            <p class="auth-section-subtitle">Sign in to your account to continue.</p>
                            <form action="/login.html" method="POST">
                                <div class="form-group">
                                    <label for="nik">NIK <sup>*</sup></label>
                                    <input type="nik" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email <sup>*</sup></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password <sup>*</sup></label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                </div>
                                <button class="btn btn-primary btn-auth-submit" type="submit">Submit</button>
                            </form>
                            <p class="mb-0">
                                <a href="/register" class="text-dark font-weight-bold">New User? Sign Up</a>
                            </p>
                        </div>
                        <div class="col-md-6 d-flex align-items-center">
                            <img src="assets/images/login.png" alt="login" class="img-fluid">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
