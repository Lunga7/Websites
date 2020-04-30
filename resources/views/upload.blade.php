@extends('layouts.down_upload')

@section('content')

<div class="row mb-5">
    <div class="col-12 section-title text-center mb-5">
        <h2 class="d-block">UPLOAD YOUR ART</h2>
        <p>Upload by selecting from the categories</p>
    </div>
</div>

<div class="row">
<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="/umphakostreams/login"><img src="public/images/p1.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Music</span>
            <h2 class="h5 text-black mb-3"><a href="/umphakostreams/login">Showcase your music</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="/umphakostreams/login"><img src="public/images/p2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Poetry</span>
            <h2 class="h5 text-black mb-3"><a href="/umphakostreams/login">Showcase your poetry</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <a href="/umphakostreams/login"><img src="public/images/p3.webp" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Clothing brand</span>
            <h2 class="h5 text-black mb-3"><a href="/umphakostreams/login">Showcase your clothing brand</a></h2>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="/umphakostreams/login"><img src="public/images/p4.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Drawing or Painting</span>
            <h2 class="h5 text-black mb-3"><a href="/umphakostreams/login">This is your drawing or painting</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="/umphakostreams/login"><img src="public/images/p5.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Photography</span>
            <h2 class="h5 text-black mb-3"><a href="/umphakostreams/login">Showcase your photography</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <a href="/umphakostreams/login"><img src="public/images/p7.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Dance</span>
            <h2 class="h5 text-black mb-3"><a href="/umphakostreams/login">Showcase your dancing moves</a></h2>
          </div>
        </div>
</div>


@endsection