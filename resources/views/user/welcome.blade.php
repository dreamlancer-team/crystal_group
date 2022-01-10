@extends('user.layout.app')

@inject('item', 'App\Models\Common')
    
    @push('main')
    
    <!-- ***** Welcome Section ***** -->
    @include('user.partials.welcome')  
    
    <!-- ***** Plant Section ***** -->
    @include('user.partials.plant')  


    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="user/assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Let’s discuss about you project</h2>
                    </div>
                    <div class="left-text">
                        <p>{{ $item->get('feature_1') }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">We can help you to grow your business</h2>
                    </div>
                    <div class="left-text">
                        <p>{{ $item->get('feature_2') }}</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="user/assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Service Section ***** -->
    @include('user.partials.service')  

    <!-- ***** Testimonials Section ***** -->
    {{-- @include('user.partials.testimonials')   --}}

    <!-- ***** Client Section ***** -->
    @include('user.partials.client')

    <!-- ***** Counter Parallax Start ***** -->
    @include('user.partials.counter')    

    <!-- ***** About Section ***** -->
    @include('user.partials.about')  
   
    <!-- ***** Gallary Section ***** -->
    {{-- @include('user.partials.gallary')   --}}

    <!-- ***** Contact Us Section ***** -->
    @include('user.partials.contact')  
    
    @endpush