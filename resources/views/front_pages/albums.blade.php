@extends('layouts.front')
@section('content')
<div class="about_bg">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div style="height:16vh"></div>
                <h1>Album</h1>
                <div style="height:8vh"></div>
            </div>
        </div>
    </div>
</div>
<div class="gallery-wrap">
    <div class="container">
        <div class="row">
            @foreach ($albums as $album)
            <div class="col-md-4 ">
                <a href="/album/{{$album->id}}">
                    @if ($album->feature_image !== "")
                    <img src="uploads/albums/{{$album->feature_image}}" height="220" width="220"
                        class="card img-responsive" alt="Feature Image">
                    @else
                    <img src="uploads/albums/folder.png" class="img-thumbnail" alt="Feature Image">

                    @endif
                    <h3 class="text-center  text-info">{{$album->name}}</h3>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
