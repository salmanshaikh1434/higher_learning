@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{$heading}}</h1>
    {{responseMessages($errors)}}

    <div class="card col-lg-8">
        <div class="card-body">
            <form action="/admin/gallery/save_album" method="post" enctype="multipart/form-data" name="myform">
                <input type="hidden" name="id" value="{{$id ?? ''}}">
                @csrf
                <div class="form-group">
                    <label for="name">Album Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                        placeholder="Album Name" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="">Album Description</label>
                    <textarea class="form-control richEditor" name="description" id="" rows="3">{{old('description')}}</textarea>
                </div>
                <div class="form-group">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>
@endsection
