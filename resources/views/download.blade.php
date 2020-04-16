@extends('layouts.app')

@section('p1')
<div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-white">Download</h1>
            <p>Select the category of your art.</p>
        
        </div>
        </div>
@endsection


@section('content')

@if(count($arts))
    @foreach($arts as $a)
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up"> 
                <a href="/umphakostreams/login"><img src="{{ asset('public/storage/arts/'.$a->image) }}" alt="Image" class="img-fluid"></a>
                <div class="p-4 bg-white">
                <span class="d-block text-secondary small text-uppercase">{{ $a->title }}</span>
                <h2 class="h5 text-black mb-3"><a href="/umphakostreams/login">{{ $a->description }}</a></h2>
                </div>
            </div>
        </div>
    @endforeach    
@endif

@endsection