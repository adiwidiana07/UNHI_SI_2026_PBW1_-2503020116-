@extends('layouts.admin')

@section('title', 'SWARNA - Tim - Admin')

@section('content')
<section class="admin-section">
    <div class="page-header">
        <div>
            <h2 class="section-title">Tim</h2>
            <p class="section-description">
                Kelola informasi tentang tim SWARNA.
            </p>
        </div>

        <button class="btn btn-warning">
            + Tambah Anggota
        </button>
    </div>

    <div class="data-card">
        <div class="table-wrapper">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Design</td>
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