@extends('master')

@section('title', "Mikhaela's Beauty Essentials")

@section('styles')
    .hero-image{
        width: 100%;
        background:url({{asset('images/home/hero-image.jpg')}});
        background-position: center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        position:relative;
        height: calc(100vh);
    }
@endsection

@section('hero-content')

<div class="hero-image">
    <div class="container">
        <div class="row">
            <div class="col-lg-1">
                sdfsdf
            </div>
        </div>
    </div>

</div>

@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        this is the subscribe section
    </div>
</div>


@endsection

