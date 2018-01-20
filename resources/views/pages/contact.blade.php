@extends('master')

@section('title', 'About')

@section('styles')
    .map-container{
        height: 500px;
        width: 500px;
    }
@endsection

@section('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLK2yPZMaOLxION4Ef2o-s1_RKi0958dU"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="map-container">
                <google-map
                        name="example"
                        latitude="51.501527"
                        longitude="-0.1921837"
                        place="Paul Rueda"
                ></google-map>
            </div>
        </div>
    </div>
@endsection