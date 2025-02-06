@extends('masyarakat.layout.master')
@section('content')
<section class="py-5 mb-5">
    <div class="container">
        <h2 class="mb-5">Data Tabel Pengaduan</h2>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card h-100" style="background-color: #ffffff;" >
                    <div class="card-body">
                        <a href="/#report" class="btn btn-primary pull-right mb-4">Tambah Pengaduan</a>
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal Pengaduan</th>
                                    <th>Judul Pengaduan</th>
                                    <th>Isi Pengaduan</th>
                                    <th>Foto Pengaduan</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>2025/01/25</td>
                                <td>Jembatan Roboh</td>
                                <td>Jembatan roboh di perbatasan jawa barat</td>
                                <td>default.jpg</td>
                                <td><a href="/status" class="btn btn-success">Selesai</a></td>
                                <td>
                                    <a href="/table/detail" class="btn btn-primary">
                                        <i class="far fa-file-alt"></i>
                                    </a>
                                    <a href="/delete" class="btn btn-danger">
                                        <i class="far fa-trash"></i>
                                    </a>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

