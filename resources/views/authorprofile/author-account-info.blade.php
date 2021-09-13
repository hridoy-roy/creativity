@extends('layouts.authorprofile.authorprofile-layouts')
@section ('page-title', 'Author || Profile')
@push ('page-css')
<style>
  .card, .card-header{
    /* border: 1px solid #0C2141; */

  }
  .card-body{
    height: 335px;
  }
  .account{
    padding-top: 50px;
  }
</style>
@endpush
@section('page-content')
<section class="account">
  <div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header py-3" style="background-color: #0C2141; color: white">
                Update Account Info
            </div>
            <div class="card-body">
                <form action="{{ route('author.account.update') }}" method="POST">
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
                        <button type="submit" class="btn btn-info text-light" style="background-color: #0C2141">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header py-3" style="background-color: #0C2141; color: white">
                Update Passwrod
            </div>
            <div class="card-body">
                <form action="{{ route('author.update.password') }}" method="POST">
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
                        <button type="submit" class="btn btn-info text-light" style="background-color: #0C2141">Submit</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@push('page-js')
<script type="text/javascript">
    
</script> 
@endpush
