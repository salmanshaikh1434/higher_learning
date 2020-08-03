@extends('layouts.front')
@section('content')
<div class="about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div style="height:16vh"></div>
                <h1>{{$album->name}}</h1>
                <div style="height:8vh"></div>
            </div>
        </div>
    </div>
</div>
<div class="gallery-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>{{strToHtml($album->description)}}</p>
                <div id="gallery">
                    <div id="gallery-content">
                        <div id="gallery-content-center">
                            @foreach ($photos as $photo)
                            <a href="/uploads/albums/{{$photo}}" class="image-link2">
                                <img src="/uploads/albums/{{$photo}}" class="all {{$album->name}} img-fluid" alt="#" />
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
