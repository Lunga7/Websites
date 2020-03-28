@extends('layouts.app')

@section('p1')
<div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white">Upload Your Art</h1>
            <p>Select the category of your art.</p>
        
        </div>
        </div>
@endsection


@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="single.html"><img src="images/p1.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Music</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">Showcase your music</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="single.html"><img src="images/p2.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Poetry</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">Showcase your poetry</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <a href="single.html"><img src="images/p3.webp" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Clothing brand</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">Showcase your clothing brand</a></h2>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
          <a href="single.html"><img src="images/p4.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Drawing or Painting</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">This is your drawing or painting</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
          <a href="single.html"><img src="images/p5.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Photography</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">Showcase your photography</a></h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
          <a href="single.html"><img src="images/p7.jpg" alt="Image" class="img-fluid"></a>
          <div class="p-4 bg-white">
            <span class="d-block text-secondary small text-uppercase">Dance</span>
            <h2 class="h5 text-black mb-3"><a href="single.html">Showcase your dancing moves</a></h2>
          </div>
        </div>
</div>


@endsection