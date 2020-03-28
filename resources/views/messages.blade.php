@extends('layouts.app')

@section('p1')
<div class="row align-items-center justify-content-center">
    <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
        <h1 class="mb-4">The Art platform</h1>
        <p><a href="#" class="btn btn-primary px-4 py-3">Download</a>   <a href="#" class="btn btn-primary px-4 py-3">Upload</a></p>
        
    </div>
</div>
@endsection


@section('content')
    <h1>Messages</h1>

    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Name: {{$message->name}}</li>
                <li class="list-group-item">Email: {{$message->email}}</li>
                <li class="list-group-item">Message: {{$message->message}}</li>
            </ul>
        @endforeach
    @endif

@endsection