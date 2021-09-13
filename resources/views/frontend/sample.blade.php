@extends ('layouts.frontend.master')
@section ('page-title', 'Photoshop Sample Work Photo Cut Out Services')
@push ('page-css')
<style type="text/css">
</style>
@endpush
@section ('page-content')
<section class="sample-wrap pt-5 mt-col-0 mt-sm-0 mt-md-4">
  <div class="px-col-2 px-sm-3 px-md-4 px-lg-5">
    <div class="sample-head px-col-2 px-sm-3 px-md-4 px-lg-5">
      <h2 class="text-center pb-col-2 pb-sm-2 pb-md-3">Photoshop Sample Work: Clipping Path, Drop Shadow, Images Masking, Retouching & Manipulation.</h2>
    </div>
    <div class="sample-card-wrap">
      <div class="sample-btn-group nav nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <!-- Clipping Path -->
        <button class="nav-link active btn" id="v-pills-clipping-path-tab" data-bs-toggle="pill" data-bs-target="#v-pills-clipping-path" type="button" role="tab" aria-controls="v-pills-clipping-path" aria-selected="true">Clipping Path</button>
        <!-- Background Removal -->
        <button class="nav-link btn" id="v-pills-background-removal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-background-removal" type="button" role="tab" aria-controls="v-pills-background-removal" aria-selected="false">Background Removal</button>
        <!-- Image Masking -->
        <button class="nav-link btn" id="v-pills-image-masking-tab" data-bs-toggle="pill" data-bs-target="#v-pills-image-masking" type="button" role="tab" aria-controls="v-pills-image-masking" aria-selected="false">Image Masking</button>
        <!-- Ghost Mannequin -->
        <button class="nav-link btn" id="v-pills-ghost-maneequin-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ghost-maneequin" type="button" role="tab" aria-controls="v-pills-ghost-maneequin" aria-selected="false">Ghost Mannequin</button>
        <!-- Natural Shadow -->
        <button class="nav-link btn" id="v-pills-natural-shadow-tab" data-bs-toggle="pill" data-bs-target="#v-pills-natural-shadow" type="button" role="tab" aria-controls="v-pills-natural-shadow" aria-selected="false">Natural Shadow</button>
        <!-- Photo Retouching -->
        <button class="nav-link btn" id="v-pills-photo-retouching-tab" data-bs-toggle="pill" data-bs-target="#v-pills-photo-retouching" type="button" role="tab" aria-controls="v-pills-photo-retouching" aria-selected="false">Photo Retouching</button>
        <!-- Color Correction -->
        <button class="nav-link btn" id="v-pills-color-correction-tab" data-bs-toggle="pill" data-bs-target="#v-pills-color-correction" type="button" role="tab" aria-controls="v-pills-color-correction" aria-selected="false">Color Correction</button>
        <!-- Product Photo Editing -->
        <button class="nav-link btn" id="v-pills-product-photo-editing-tab" data-bs-toggle="pill" data-bs-target="#v-pills-product-photo-editing" type="button" role="tab" aria-controls="v-pills-product-photo-editing" aria-selected="false">Product Photo Editing</button>
        <!-- Vector Conversion -->
        <button class="nav-link btn" id="v-pills-vector-conversion-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vector-conversion" type="button" role="tab" aria-controls="v-pills-vector-conversion" aria-selected="false">Vector Conversion</button>
      </div>
      <div class="tab-content" id="v-pills-tabContent">
        <!-- Clipping Path -->
        <div class="tab-pane fade show active" id="v-pills-clipping-path" role="tabpanel" aria-labelledby="v-pills-clipping-path-tab">
          <div class="row sample-body">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Clipping_Path/Clipping_Path.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Clipping_Path/Cut_Out_Images.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Clipping_Path/Cut_Out.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Clipping_Path/Photo_Background_Change.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('clipping.path')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Background Removal -->
        <div class="tab-pane fade" id="v-pills-background-removal" role="tabpanel" aria-labelledby="v-pills-background-removal-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Background_Removal/Background_Removal.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Background_Removal/Photoshop_Clipping.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Background_Removal/Background_Change.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Background_Removal/Photoshop_Clipping_Path.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('background.removal')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Image Masking -->
        <div class="tab-pane fade" id="v-pills-image-masking" role="tabpanel" aria-labelledby="v-pills-image-masking-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Image_masking/Photoshop_Masking.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Image_masking/Photo_Hair.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Image_masking/Hair.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Image_masking/Masking_Service.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('image.masking')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Ghost Mannequin -->
        <div class="tab-pane fade" id="v-pills-ghost-maneequin" role="tabpanel" aria-labelledby="v-pills-ghost-maneequin-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Ghost_mannequin/Photo_manipulation.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Ghost_mannequin/Ghost_Mannequin_Service.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Ghost_mannequin/Ghost_Mannequin.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Ghost_mannequin/Photoshop_manipulation.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('ghosht.manneuquin')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Natural Shadow -->
        <div class="tab-pane fade" id="v-pills-natural-shadow" role="tabpanel" aria-labelledby="v-pills-natural-shadow-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Drop_shadow/shadow_creation.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Drop_shadow/image_drop_shadow.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Drop_shadow/Drop_Shadow_Service.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Drop_shadow/drop_Photoshop.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('natural.shadow')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Photo Retouching -->
        <div class="tab-pane fade" id="v-pills-photo-retouching" role="tabpanel" aria-labelledby="v-pills-photo-retouching-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Photo_retouching/retouching_service.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Photo_retouching/Photo_Retouching_Service.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Photo_retouching/retouching_product.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Photo_retouching/jewelry_retouching.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('photo.retouching')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Color Correction -->
        <div class="tab-pane fade" id="v-pills-color-correction" role="tabpanel" aria-labelledby="v-pills-color-correction-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Color_variants/image_Color_Correction.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Color_variants/Color_Service.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Color_variants/Color_variants.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Color_variants/Photo_color_change.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('color.correction')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Product Photo Editing -->
        <div class="tab-pane fade" id="v-pills-product-photo-editing" role="tabpanel" aria-labelledby="v-pills-product-photo-editing-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Product_photo_editing/Ecommerce_Product.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Product_photo_editing/Product_Editing_Service.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Product_photo_editing/Product_photo_editing.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Product_photo_editing/Product_editing.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('product.photo.editing')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
        <!-- Vector Conversion -->
        <div class="tab-pane fade" id="v-pills-vector-conversion" role="tabpanel" aria-labelledby="v-pills-vector-conversion-tab">
          <div class="row">
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10 mobile-pt-10">
              <img src="{{ asset('assets/frontend/img/sample/Vector_Conversion/Converting_raster.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Vector_Conversion/convert_hand.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Vector_Conversion/conversion.png') }}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-6 pt-col-2 pt-sm-3 pt-md-4 mobile-pb-10">
              <img src="{{ asset('assets/frontend/img/sample/Vector_Conversion/Vector_conversion.png') }}" alt="" class="img-fluid">
            </div>
            <div class="custom_button text-center ">
              <a href="{{route('vector.conversion')}}" class="btn btn text-uppercase" rel="preload">Load More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
</section>
<!-- Sample-Article Section Start -->
<section class="px-2">
  <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 text-center mobile-py-20">
      <h1>Designer Country, an outsourcing graphic design studio, situated in a developing country</h1>
      <p class="pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4">Bangladesh where the manpower is easier than this of
          developed country. Beacuse of an easier manpower we are able to provide design service in your expected
          quality for an affordable rate. We must ensure you the security of imagess with a good confidence asif
          the the price is not high. Besides a big discount must be given to you for bulk imagess. our rates are
          perfect for us and so they prove our reliability. Our editing quality is proficent and impressive that
          always makes us interest to acquire an expected price from our clients. We believe in making the dream
          of our clients fulfill. We present us for our clients satisfication in their expected way. We are very
          active in our work and always try our best to make the client work better quality. So we always believe
          in our service price is always just and fair on the market place of the graphic design world.</p>
  </div>
</section>
<!-- Sample-Article Section End -->
<!-- Sample-card Section Start -->
@include ('layouts.frontend.partials.sample_card')
<!-- Sample-card Section End -->
<!-- Tag Section Start -->
@include ('layouts.frontend.partials.tag')
<!-- Tag Section End -->
@endsection
@push('page-js')
@endpush