@extends('layouts.app')

@section('p1')
<div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade-up" data-aos-delay="400">
          <h1 class="text-white">Contact Us</h1>
          <p>You can contact us using the details or form below.</p>
        </div>
      </div>


    
@endsection


@section('content')

{!! Form::open(['url' => 'contact/submit']) !!}

    
              <div class="row">
  
                <div class="col-md-12 col-lg-7 mb-5">

                  <form action="#" class="contact-form">

                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Full Name'])}}
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email'])}}
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-md-12 mb-3 mb-md-0">
                        {{Form::label('message', 'Message')}}
                        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Message'])}}
                      </div>
                    </div>


                    <div class="row form-group">
                      <div class="col-md-12">
                        {{Form::submit('Submit', ['class'=> 'btn btn-primary py-3 px-4'])}}
                      </div>
                    </div>



                  </form>
                </div>
              </div>
   

      {!! Form::close() !!}

@endsection