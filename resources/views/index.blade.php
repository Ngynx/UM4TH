@extends('Layouts.app')

@section('content')
<section class="pt-4 pt-md-12">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">
            
            <!-- Image -->
            <img src="" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="..." data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">
            
            <!-- Heading -->
            <h1 class="display-3 text-center text-md-left">
              Bienvenido a <span class="text-primary">UM4TH</span>. 
            </h1>
                
            <!-- Buttons -->
            <div class="text-center text-md-left">
              <a href="{{ route('login') }}" class="btn btn-dark btn-sm mr-2 my-2">
                {{ __('Login')}}
              </a>
              <a href="{{ route('register') }}" class="btn btn-outline-dark btn-sm my-2">
                {{ __('Register')}}
              </a>
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
@endsection
