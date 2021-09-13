@component('mail::message')

<h2>Choosed services</h2>
<br><br>
<div class="row py-xl-5 py-lg-5 py-md-5 py-sm-4 py-xs-3">
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

<h1>Customer Informating</h1>

<strong>Email : </strong> {{ $data->email}} <br>
<strong>Name : </strong> {{ $data->name }} <br>
<strong>Quantity : </strong> {{ $data->quantity }} <br>
<strong>Desired Turnaround Time : </strong> {{ $data->sellection }} <br>
<strong>Details Instraction : </strong> {{ $data->details_instraction }} <br>


Thanks,<br>
{{ 'Designer Country' }}
@endcomponent
