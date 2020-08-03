@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Gallery</h1>
    {{responseMessages($errors)}}
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary float-right" href="/admin/gallery/add_album">
                Add Album
            </a>
        </div>
        <br>
        <br>
        <div class="col-lg-12 bg-white">
            <table class="table responsive" id="dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Feature Image</th>
                        <th>Album Name</th>
                        <th>Album Description</th>
                        <th>View Album</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($albums as $item)
                    <tr>
                        <th>{{$loop->index+1}}</th>
                        <th><img src="/uploads/albums/{{$item->feature_image}}" class="img-fluid" alt=""></th>
                        <th>{{$item->name}}</th>
                        <th>{{strToHtml($item->description)}}</th>
                        <th><a href="/admin/gallery/upload_images/{{$item->id}}">View Album</a></th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
