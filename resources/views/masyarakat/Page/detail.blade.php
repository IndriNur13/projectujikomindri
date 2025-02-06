@extends('masyarakat.layout.master')
@section('content')
<section class="py-5 mb-5">
    <div class="container">
        <h2 class="mb-5">Detail Pengaduan</h2>
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card h-100" style="background-color: #ffffff;" >
                    <div class="card-body">
                        <a href="/table" class="btn btn-warning pull-right mb-4">Kembali</a>
                        <table class="table table-bordered border-dark">
                            <thead>
                                <tr class="text-center">
                                    <th>Info Pengaduan</th>
                                    <th>Tanggapan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td><b>Tanggal Pengaduan: </b> <br>
                                    <b>Judul Pengaduan: </b> <br>
                                    <b>Isi Pengaduan: </b> <br>
                                    <b>Foto Pengaduan: </b> <br>
                                    <b>Status: </b>
                                </td>
                                <td><b>Tanggal Tanggapan: </b> <br>
                                    <b>Tanggapan: </b> <br>
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

