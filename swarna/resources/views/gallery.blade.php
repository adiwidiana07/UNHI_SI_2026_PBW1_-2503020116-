@extends('layouts.app')

@section('title', 'SWARNA - Galeri')

@section('content')
  <section class="gallery-section py-5">
    <div class="container-fluid px-4">
      <!-- Header -->
      <div class="mb-5 text-center">
        <h1 class="section-title mb-3 text-white">Galeri Karya SWARNA</h1>
        <p class="text-muted fs-5 mb-3">Jelajahi koleksi desain dan produksi terbaik kami</p>
      </div>

      <!-- Masonry Grid -->
      <div class="gallery-grid">
        @forelse($galleryItems as $item)
          <div class="gallery-item" data-category="{{ $item->category }}">
            <div class="gallery-card">
              <div class="gallery-image-wrapper">
                <img src="{{ str_starts_with($item->image, 'img/') ? asset($item->image) : Storage::url($item->image) }}" alt="{{ $item->title }}" class="gallery-image" loading="lazy">
                <div class="gallery-overlay">
                  <div class="overlay-content">
                    <h5 class="overlay-title">{{ $item->title }}</h5>
                    <p class="overlay-category">{{ $item->category }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="text-center py-5 col-12">
            <p class="text-muted">Galeri kosong</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>
@endsection