@extends('layouts.admin.backend-layouts')
@section ('page-title', 'contact||show')
@push ('page-css')
<style>
    .card-header a{
        color: white;
    }
    .card-header a:hover{
        color: rgb(226, 226, 226);
    }
</style>
@endpush
@section('page-content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-address-book"></i></i> Contact</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">View Contact</a></li>
    </ul>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header pt-4" style="background-color: #009b97;; color: #ffff;">
            <h5 class="text-center"><strong class="pr-2 mb-0 pb-0"><a href="mailto: {{ $contact->email }}">{{ $contact->email }}</a></strong>has been contacted :)</h5>
            </div>
            <div class="card-body">
                <div class="pb-3">
                    <strong>Name : </strong><br>
                    {{$contact->name}}
                </div>
                <div class="pb-3">
                    <strong>Email : </strong><br>
                    {{$contact->email}}
                </div>
                <div class="pb-3">
                    <strong>Subject : </strong><br>
                    {{$contact->subject}}
                </div>
                <div>
                    <strong>Message : </strong><br>
                    {{$contact->message}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

