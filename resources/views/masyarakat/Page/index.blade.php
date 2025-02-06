@extends('masyarakat.layout.master')
@section('header')
<div class="header-content">
    <div class="row">
        <div class="col-md-6">
            <h1>Wadah Aspirasi untuk Perubahan Lebih Baik!</h1>
            <p class="text-dark">Aplikasi sederhana untuk menyampaikan pengaduan dan mewujudkan solusi bersama.</p>
        </div>
        <div class="col-md-6">
            <img src="assets/images/icon_1.svg" alt="app" width="280px" class="img-fluid">
        </div>
    </div>
</div>
@endsection
@section('content')
<section id="about" class="py-5 mb-5">
    <div class="container">
        <h2 class="section-title">Tentang Aplikasi</h2>
        <div class="row">
            <div class="col-lg-6 mb-4 mt-3 mb-lg-0">
                <p class="text-dark mt-3">Aplikasi Pengaduan Masyarakat merupakan platform yang dirancang untuk memfasilitasi masyarakat dalam menyampaikan keluhan terkait layanan publik secara efektif dan transparan. Melalui aplikasi ini, setiap laporan akan diverifikasi dan ditindaklanjuti oleh petugas yang berwenang.</p> <br>
                <p>Pengguna juga dapat memantau perkembangan laporan secara real-time dan menerima tanggapan resmi sebagai bentuk penyelesaian. Aplikasi ini hadir untuk mendukung terwujudnya pelayanan publik yang lebih responsif dan terpercaya.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <img src="{{asset('assets/images/tentang_kami.svg')}}" width="350">
            </div>
        </div>
    </div>
</section>
<section id="feature" class="py-5 mb-5">
    <div class="container">
        <h2 class="mb-5">Fitur Pengaduan</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100" style="background-color: #F4EDFF">
                    <div class="card-body d-flex flex-column">
                        <h3 class="mb-1">Form Pengaduan</h3>
                        <p class="mb-4 flex-grow-1">Isi form pengaduan dengan detail masalah yang Anda hadapi. Sertakan deskripsi, dan bukti foto pengaduan untuk memastikan laporan Anda diterima dengan tepat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100" style="background-color: #F4EDFF">
                    <div class="card-body d-flex flex-column">
                        <h3>Status Terkini</h3>
                        <p class="mb-1">Lihat status laporan Anda</p>
                        <ul class="flex-grow-1">
                            <li><b>New: </b>Laporan Baru</li>
                            <li><b>Proses: </b>Laporan Anda berada dalam proses</li>
                            <li><b>Selesai: </b>Masalah Anda telah di tindaklanjuti</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100" style="background-color: #F4EDFF">
                    <div class="card-body d-flex flex-column">
                        <h3>Riwayat pengaduan</h3>
                        <p class="mb-4 flex-grow-1">Akses daftar lengkap pengaduan Anda, termasuk detail laporan yang telah diajukan, status terkini proses penyelesaiannya, dan tanggapan yang sudah diberikan oleh petugas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="report" class="py-5 mb-5">
    <div class="container">
        <h2 class="mb-5">Form Pengaduan</h2>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card h-100" style="background-color: #ffffff; padding: 50px;" >
                    <div class="card-body d-flex flex-column">
                        <form action="/login.html" method="POST">
                            <div class="form-group">
                                <label for="tanggal_pengaduan">Tanggal Pengaduan</label>
                                <input type="date" class="form-control" id="tanggal_pengaduan" name="tanggal_pengaduan">
                            </div>
                            <div class="form-group">
                                <label for="judul_pengaduan">Judul Pengaduan</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Judul Pengaduan">
                            </div>
                            <div class="form-group">
                                <label for="isi_pengaduan">Isi Pengaduan</label>
                                <textarea type="text" class="form-control" id="isi_pengaduan" name="isi_pengaduan" placeholder="Masukkan Isi Pengaduan dan Sertakan Alamatnya"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto_pengaduan">Foto Pengaduan</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto_pengaduan" name="foto_pengaduan">
                                    <label class="custom-file-label" for="foto_pengaduan">Pilih file...</label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-auth-submit" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
