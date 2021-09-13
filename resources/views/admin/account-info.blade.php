@extends('layouts.admin.backend-layouts')
@section ('page-title', 'Admin Profile || Account Credentials')
@push ('page-css')
<style>
    .card-body{
        height: 335px;
    }
    label{
        font-weight: bold;
    }
</style>
@endpush
@section('page-content')
<div class="app-title">
    <div>
      <h1><i class="fas fa-user-shield"></i></i> Account</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Account</a></li>
    </ul>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background-color: #009688">
                <h4 class="m-0 text-center text-light">Update Account Info</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.account.update') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Email" value="{{ auth()->user()->email }}" name="email">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" style="background-color: #009688">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background-color: #009688">
                <h4 class="m-0 text-center text-light">Update Passwrod</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.update.password') }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="old_password">Enter Old Password</label>
                      <input type="password" class="form-control" id="old_password" placeholder="Enter Old Password" name="old_password">
                    </div>
                    <div class="form-group">
                      <label for="newpassword">New Password</label>
                      <input type="password" class="form-control" id="newpassword" placeholder="New Password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">New Password</label>
                        <input type="password" class="form-control" id="confirm_password" placeholder="New Password" name="password_confirmation">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" style="background-color: #009688">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('page-js')
<script type="text/javascript">
</script> 
@endpush
