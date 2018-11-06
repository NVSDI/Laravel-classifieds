@extends('master')


@section('title', 'Front page')

@section('content')
    
    

        <div class="container">
            <div class="col-12">                
                <img src="{{ asset('img/banner.jpg') }} " class="img-responsive"  alt="banner image" />
            </div>
        </div>


        <article class="container">
            <div class="col-12" style="text-align: center;">
                <h1>Aylik 10,000 ziyaretci sayisi</h1>
            </div>        
        </article>

        <article class="container"> 
            <div class="col-12" style="text-align: center;">
                <a class="btn btn-custom" href="{{ action('AdvertsController@create') }}">Ilan Ver / Post An Ad</a>
            </div>
        </article>

        <style type="text/css">
            #three-img .title {
                color: #900464;
            }
            #three-img .col-4 {
                text-align: center;                
                border: #EEE 1px solid;
            }
        </style>

        <section class="container" style="margin-top: 1em;" id="three-img">        
            <div class="col-4">
                <a href="/categories/1" title="">
                    <img src="img/jobs.png" alt="" class="img-responsive">
                    <div class="title">IS ILANLARI </div>
                </a>            
            </div>
            <div class="col-4">
                <a href="/categories/2" title="">
                    <img src="img/kiralik8.png" alt="" class="img-responsive">
                    <div  class="title">KIRALIK </div>
                </a>
            </div>    
            <div class="col-4">
                <a href="/categories/3" title="">
                    <img src="img/services2.png" alt="" class="img-responsive">
                    <div class="title">HIZMETLER </div>
                </a>
            </div>    
        </section>

@endsection