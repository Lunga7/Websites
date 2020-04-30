@extends('layouts.app')

@section('p1')
<div class="row align-items-center justify-content-center">
  <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
    <h1 class="mb-4">The Art Platform</h1>
    <p><a href="/umphakostreams/download" class="btn btn-primary px-4 py-3">Download</a>   <a href="/umphakostreams/login" class="btn btn-primary px-4 py-3">Upload Art</a></p>
  <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="fas fa-sign-out-alt"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
  </li>
  </div>
</div>
@endsection


@section('content')


@endsection