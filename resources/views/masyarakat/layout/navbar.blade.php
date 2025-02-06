<nav class="navbar navbar-expand-lg navbar-light foi-navbar">
    <a class="navbar-brand" href="index.html">
        <img src="{{asset('assets/images/logo.svg')}}" alt="FOI">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Halaman</a>
                <div class="dropdown-menu" aria-labelledby="pagesMenu">
                    <a class="dropdown-item" href="/#about">Tentang Aplikasi</a>
                    <a class="dropdown-item" href="/#feature">Fitur Aplikasi</a>
                    <a class="dropdown-item" href="/#report">Form Pengaduan</a>
                    <a class="dropdown-item" href="/table">Data Pengaduan</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Profile Masyarakat</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item mr-2 mb-3 mb-lg-0">
                <a class="btn btn-light" href="/register">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-light" href="/login">Login</a>
            <!--</li>
            <li class="nav-item">
                <a class="btn btn-light" href="/logout">Logout</a>
            </li>-->
        </ul>
    </div>
</nav>
