@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Notification Manager</h1>
    {{responseMessages($errors)}}
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modelId">
        <i class="fa fa-bell" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i>
    </button>
    <hr /><br />
    <div class="row">
        <!-- Button trigger modal -->
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Notices</th>
                    <th>Attachment</th>
                    <th>Type</th>
                    <th>expiry date</th>
                    <th>delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notices as $notice)
                <tr>
                    <td scope="row">{{$loop->index+1}}</td>
                    <td>{{$notice->details}}</td>
                    <td><small><a target="_blank" href="{{($notice->attachment == null)?"Attachement Not Available" : '/download/notice/'.$notice->id}}">{{$notice->attachment}}</a>'</small></td>
                    <td>{{announcementType($notice->type)}}</td>            
                    <td>{{$notice->expiry_date}}</td>
                    <td><a onclick="return confirm('Are you sure want to delete {{$notice->details}}?')" href="/admin/notice/delete/{{$notice->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Notification Manager</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/notices/save_notice" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="expiry_date">Expiry Date</label>
                                    <input type="date" class="form-control" name="expiry_date" id="expiry_date"
                                        aria-describedby="helpId" placeholder="Expiry Date">
                                </div>
                                <div class="form-group">
                                    <label for="details">Notification</label>
                                    <textarea class="form-control" name="details" id="details" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Select Type of notification</label>
                                    <select class="form-control" name="type">
                                        @for ($i = 0; $i < count($annotype); $i++) <option value="{{$i}}">
                                            {{$annotype[$i]}}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="upload">Document Upload</label>
                                    <input type="file" class="form-control-file" name="download" id="download"
                                        placeholder="document Upload" aria-describedby="downloads">
                                    <small id="upload" class="form-text text-muted">upload Document If needed</small>
                                </div>
                                <button type="submit" class="btn btn-primary">save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
