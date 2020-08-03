@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{$album->name}}</h1>
    {{responseMessages($errors)}}

    <div class="card col-lg-12">
        <div class="card-body">
            <small id="images" class="form-text text-danger">images shoud be less than 1 mb</small><br>
            <form class="form-inline" action="/admin/gallery/save_uploaded_images" method="post"
                enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$id}}">
                @csrf
                <div class="form-group">
                    <label for="image">Image Upload </label>
                    <input type="file" name="images[]" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" type="image/*" multiple>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-12">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>sr. no</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos ?? [] as $item)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td><img src="/uploads/albums/{{$item}}" class="img-fluid" alt=""></td>
                    <td>
                        <a name="cover" id="cover" class="btn btn-primary" href="/admin/gallery/cover_img/{{$album->id}}/{{$item}}" role="button">Set Album Cover</a>
                        <a onclick="return confirm('are you sure to delete {{$item}} photo ?')" name="delete"
                            id="delete" class="btn btn-danger"
                            href="/admin/gallery/photo/delete/{{$album->id}}/{{$item}}" role="button"><i
                                class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
