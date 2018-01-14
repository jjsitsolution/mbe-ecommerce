@extends('master')

@section('title', 'About')

@section('styles')
    .about-primary-image{
       {{-- border: 1px solid black;--}}
        height: auto;
        padding: 30px;
        background-image:  url({{asset('images/about/pexels-photo-594365.jpg')}});
        background-position: center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .primary-image-text{
        margin-top: 100px;
        width: auto;
        max-width: 350px;
    }

    .product-design{
        width: 100%;
        height: 400px;
    }

@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="about-primary-image">
                <div class="primary-image-text">
                    <h2 class="text-primary-color">WHO WE ARE</h2>
                    <p class="text-secondary-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin et metus sodales, hendrerit ex venenatis, convallis arcu. Integer mollis metus in dolor luctus, nec commodo enim fringilla. Etiam congue elit vitae urna venenatis consequat.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="mt-5">
                <img class="product-design" src="{{asset('images/about/handmade-1139554_640.jpg')}}">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="mt-5">
                <h2 class="text-right text-primary-color">SPREADING BEAUTY</h2>
                <h2 class="text-right text-primary-color">ESSENTIALS SINCE</h2>
                <h2 class="text-right text-primary-color">2005</h2>
                <p class="text-justify text-secondary-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Mauris et sodales augue. Nullam consectetur odio eget enim
                    porttitor, non sagittis tortor tempor. Aliquam erat volutpat.
                </p>
            </div>
        </div>
    </div>

@endsection