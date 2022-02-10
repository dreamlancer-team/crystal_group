@extends('user.layout.app')

@inject('item', 'App\Models\Common')
    
    @push('main')
    
    <!-- ***** Welcome Section ***** -->
    @include('user.partials.welcome')  
    
    <!-- ***** Plant Section ***** -->
    @include('user.partials.plant')  


    <!-- ***** Features Big Item Start ***** -->
    @include('user.partials.big_features')

    <!-- ***** Service Section ***** -->
    @include('user.partials.types')  

    <!-- ***** Service Section ***** -->
    @include('user.partials.services')  

    <!-- ***** Client Section ***** -->
    @include('user.partials.client')

    <!-- ***** Counter Parallax Start ***** -->
    @include('user.partials.counter')    
   
    <!-- ***** Gallary Section ***** -->
    @include('user.partials.gallary')  

    <!-- ***** About Section ***** -->
    @include('user.partials.about')  
   
    <!-- ***** Contact Us Section ***** -->
    @include('user.partials.contact') 
        
    @endpush