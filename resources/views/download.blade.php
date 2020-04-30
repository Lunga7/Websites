@extends('layouts.down_upload')

@section('content')


<div class="row mb-5">
    <div class="col-12 section-title text-center mb-5">
        <h2 class="d-block">DOWNLOADS</h2>
        <p>Download from the following categories</p>
    </div>
</div>


<div class="row">
    @if(count($arts))
        @foreach($arts as $a)
            <div class="col-lg-4 mb-5 col-md-6">

                <div class="wine_v_1 text-center pb-4">
                <a href="shop-single.html" class="thumbnail d-block mb-4"><img src="{{ asset('public/storage/arts/'.$a->image) }}" alt="Image" class="img-fluid"></a>
                <div>
                    <h3 class="heading mb-1"><a href="#">{{ $a->description }}</a></h3>
                    <span class="price">{{ $a->title }}</span>
                </div>
                
                </div>

            </div>
        @endforeach    
    @endif
</div>
    

@endsection