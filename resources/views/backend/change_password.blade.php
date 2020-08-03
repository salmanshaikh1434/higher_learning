@extends('layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Change Password</h1>
    {{responseMessages($errors)}}
    <div class="row">
        <div class="col-lg-6">
            <form action="/admin/change_password" method="post">
                @csrf
                <div class="form-group">
                  <label for="current_password">Current Password</label>
                  <input type="password"
                    class="form-control" name="current_password" id="current_password" placeholder="Current Password" required>
                </div>
                <div class="form-group">
                  <label for="new_password">New Password</label>
                  <input type="password"
                    class="form-control" name="password" id="password" placeholder="New Password" required>
                </div>
                <div class="form-group">
                  <label for="confirm_password">Confirm New Password</label>
                  <input type="password"
                    class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
