@extends('layouts.admin')

@section('title', 'SWARNA - Dashboard - Admin')

@section('content')
  <section id="admin-dashboard">
    <div class="dashboard-header">
      <h2 class="section-title">Admin Dashboard</h2>
      <p>Selamat datang di dashboard admin SWARNA! Kelola konten situs dengan mudah dari sini: galeri, apparel, dan elemen penting lainnya.</p>
    </div>

    <div class="dashboard-grid">
      <article class="dashboard-card">
        <h3>Galeri</h3>
        <p>Kelola foto, koleksi visual, dan tampilan galeri di halaman publik.</p>
      </article>

      <article class="dashboard-card">
        <h3>Apparel</h3>
        <p>Kelola produk apparel, koleksi, dan detail brand untuk penjualan.</p>
      </article>

      <article class="dashboard-card">
        <h3>Kontak</h3>
        <p>Kelola pesan masuk, informasi pelanggan, dan detail kontak penting.</p>
      </article>
    </div>
  </section>
@endsection