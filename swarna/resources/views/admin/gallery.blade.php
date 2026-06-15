@extends('layouts.admin')

@section('title', 'SWARNA - Galeri - Admin')

@section('content')

<section class="admin-section">

<div class="page-header">
    <div>
        <h2 class="section-title">Galeri</h2>
        <p class="section-description">
            Kelola foto dan koleksi visual yang ditampilkan di halaman publik.
        </p>
    </div>

    <button class="btn btn-warning">
        + Tambah Gambar
    </button>
</div>

<div class="data-card">
    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Contoh Judul 1</td>
                    <td>Deskripsi singkat untuk gambar 1.</td>

                    <td>
                        <img
                            src="{{ asset('img/model 1.png') }}"
                            alt="Sample Image"
                            class="table-image">
                    </td>

                    <td>
                        <div class="table-actions">
                            <button class="btn btn-sm btn-edit">
                                Edit
                            </button>

                            <button class="btn btn-sm btn-danger">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</section>
@endsection
