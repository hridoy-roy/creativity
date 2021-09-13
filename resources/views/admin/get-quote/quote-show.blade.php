@extends('layouts.admin.backend-layouts')
@section ('page-title', 'Get Quote || Show')
@section ('page-css')
<style>
</style>
@endsection
@section('page-content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-laptop"></i></i>Get A Quote</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">View Get A Quote</a></li>
    </ul>
  </div>
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <h4 class="py-3 text-center" style="background: #009688; color:white"><a href="mailto: {{ $data->email }}" class="text-light">{{ $data->email }}</a> Send Get A Quote :)</h4>
            <div class="row px-sm-3 px-md-4 px-lg-5 py-xl-5 py-lg-5 py-md-5 py-sm-4 py-xs-3">
                <div class="col-md-4">
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check1">
                            <input type="checkbox" class="form-check-input" {{ $data->clipping_path ? "checked" : ""}} disabled id="check1" name="clipping_path">Clipping Path
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check2">
                            <input type="checkbox" class="form-check-input" id="check2" {{ $data->multi_clipping_path ? "checked" : ""}} disabled name="multi_clipping_path">Multi
                            Clipping Path
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check3">
                            <input type="checkbox" class="form-check-input"{{ $data->image_masking ? "checked" : ""}} disabled name="image_masking">Image Masking
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check4">
                            <input type="checkbox" class="form-check-input" {{ $data->photo_retouching ? "checked" : ""}} disabled name="photo_retouching">Photo Retouching
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check5">
                            <input type="checkbox" class="form-check-input" id="check1" {{ $data->ghost_mannequin ? "checked" : ""}} disabled  name="ghost_mannequin">Ghost
                            Mannequin
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check6">
                            <input type="checkbox" class="form-check-input" id="check2" {{ $data->dropdown_shadow ? "checked" : ""}} disabled  name="dropdown_shadow">Dropdown Shadow
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check7">
                            <input type="checkbox" class="form-check-input" {{ $data->reflection_shadow ? "checked" : ""}} disabled  name="reflection_shadow">Reflection Shadow
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check8">
                            <input type="checkbox" class="form-check-input" {{ $data->color_variants ? "checked" : ""}} disabled  name="color_variants">Color Variants
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check9">
                            <input type="checkbox" class="form-check-input" id="check1" {{ $data->vactor_convartion ? "checked" : ""}} disabled  name="vactor_convartion">Vactor Convartion
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check10">
                            <input type="checkbox" class="form-check-input" id="check2" {{ $data->brightness_enhencement ? "checked" : ""}} disabled  name="brightness_enhencement">Brightness Enhencement
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check11">
                            <input type="checkbox" class="form-check-input" {{ $data->ecomerce_image_editing ? "checked" : ""}} disabled  name="ecomerce_image_editing">Ecommerce-Image Editing
                        </label>
                    </div>
                    <div class="form-check py-2">
                        <label class="form-check-label" for="check12">
                            <input type="checkbox" class="form-check-input" {{ $data->image_restarted ? "checked" : ""}} disabled  name="image_restarted">Do you need your image restarted
                        </label>
                    </div>
                </div>
            </div>
            <div class="row px-sm-3 px-md-4 px-lg-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fname" class="pb-2"><strong>Full Name:</strong></label>
                        <input type="text" class="form-control" id="name" name="name" disabled value="{{ $data->name }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email" class="pb-2"><strong>Email Address:</strong></label>
                        <input type="email" class="form-control" id="email" name="email"  disabled value="{{ $data->email }}">
                    </div>
                </div>
            </div>
            <div class="row px-sm-3 px-md-4 px-lg-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="quantity" class="pb-2"><strong>Quantity:</strong></label>
                        <input type="number" class="form-control" id="quantity" name="quantity"  disabled value="{{ $data->quantity }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sellection" class="pb-2"><strong>Desired Turnaround
                                Time:</strong></label>
                            <input  class="form-control" id="sellection" name="sellection"  disabled value="{{ $data->sellection }}">
                    </div>
                </div>
            </div>
            <div class="row px-sm-3 px-md-4 px-lg-5">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="comment" class="pb-2"><strong>Details Instraction:</strong></label>
                        <textarea class="form-control" rows="6" id="comment" name="details_instraction" disabled>{{ $data->details_instraction }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js')
<script type="text/javascript" src="{{asset('assets/backEnd/js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/backEnd/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script type="text/javascript">
</script>
@endsection