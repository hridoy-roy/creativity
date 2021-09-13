@extends ('layouts.frontend.master')
@section ('page-title', 'Photo Retouching & Cut Out Services  Price | Starting at $0.39/Image')
@push('og-graph-tag')
<meta property="og:title" content="Photo Retouching & Cut Out Services  Price | Starting at $0.39/Image" />
<meta property="og:description" content="Clipping Path Cut Out Services | Designer Country" />
<meta property="og:image" content="https://designercountry.com/assets/frontend/img/pricing/Clipping-Path.png" />
@endpush
@push ('page-css')
<style type="text/css">
</style>
@endpush
@section ('page-content')
<section class="sample-wrap pt-5 mt-col-0 mt-sm-0 mt-md-4">
  <div class="container text-center pb-md-3 pb-sm-3 mobile-pb-20">
    <h2 class="text-center pb-col-2 pb-sm-2 pb-col-2 pb-sm-3 pb-md-4">Photo Editing Price-Designer Country</h2>
    <p class="text-center">A cheap-priced we offer let you approach us flexibly, pricing strategy policy <br>
      we maintain for your benefits including bulk image effects discount.</p>
  </div>
  <div class="price-wrap">
    <div class="pricing-card">
      <div class="price-btn-group nav nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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
          <div class="price-body">
            <span class="price-tag">Cliping Path <strong>$0.39</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Clipping-Path.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Background Removal -->
        <div class="tab-pane fade" id="v-pills-background-removal" role="tabpanel" aria-labelledby="v-pills-background-removal-tab">
          <div class="price-body">
            <span class="price-tag">Background Removal <strong>$0.39</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Background-removal.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Image Masking -->
        <div class="tab-pane fade" id="v-pills-image-masking" role="tabpanel" aria-labelledby="v-pills-image-masking-tab">
          <div class="price-body">
            <span class="price-tag">Image Masking <strong>$1.50</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Image-masking.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Ghost Mannequin -->
        <div class="tab-pane fade" id="v-pills-ghost-maneequin" role="tabpanel" aria-labelledby="v-pills-ghost-maneequin-tab">
          <div class="price-body">
            <span class="price-tag">Ghost Mannequin <strong>$1.45</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Manipulation_4.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Natural Shadow -->
        <div class="tab-pane fade" id="v-pills-natural-shadow" role="tabpanel" aria-labelledby="v-pills-natural-shadow-tab">
          <div class="price-body">
            <span class="price-tag">Drop Shodow <strong>$0.49</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Drop-shadow.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Photo Retouching -->
        <div class="tab-pane fade" id="v-pills-photo-retouching" role="tabpanel" aria-labelledby="v-pills-photo-retouching-tab">
          <div class="price-body">
            <span class="price-tag">Photo Retouching <strong>$1.65</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Photo-retouching.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Color Correction -->
        <div class="tab-pane fade" id="v-pills-color-correction" role="tabpanel" aria-labelledby="v-pills-color-correction-tab">
          <div class="price-body">
            <span class="price-tag">Color Variants <strong>$1.50</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Color-variants.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Product Photo Editing -->
        <div class="tab-pane fade" id="v-pills-product-photo-editing" role="tabpanel" aria-labelledby="v-pills-product-photo-editing-tab">
          <div class="price-body">
            <span class="price-tag">Product Photo Editing <strong>$1.39</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Product-photo-editing.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
        <!-- Vector Conversion -->
        <div class="tab-pane fade" id="v-pills-vector-conversion" role="tabpanel" aria-labelledby="v-pills-vector-conversion-tab">
          <div class="price-body">
            <span class="price-tag">Vactor Conversion <strong>$4.99</strong></span>
            <img src="{{asset('assets/frontend/img/pricing/Vector-conversion.png')}}" alt="" class="img-fluid">
            <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
              <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase">get quote</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Section Start -->
<section class="mobile-py-20 px-2">
  <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
      <div class="head text-center mobile-pt mobile-pb mobile-pr mobile-pl">
          <h1 class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4 mobile-pb-10">Image Processing Pricing Table</h1>
          <p class="mobile-pb-10">Eventually the standard value of your images & brand will regulate how appreciably you pay for files
              edited.
              Specifically top-priority on delivery we control time management if you have more files. Even we manage
              your
              expectance to lighten your photo smile, brighten by editing your image’s perspective. </p>
      </div>
      <div class="row py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
          <div class="col-md-4">
              <ul class="list-group mb-3 text-center"
                  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #283E4B;">
                      <h2 class="text-uppercase text-light">Basic</h2>
                  </li>
                  <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #F8F8F8;">
                      <h1><b>$ 25 <sup>00</sup></b></h1>
                  </li>
                  <li class="list-group-item py-sm-3"><strong>25</strong> Edit Credits</li>
                  <li class="list-group-item py-sm-3"><strong>1.00</strong> per Credit</li>
                  <li class="list-group-item py-sm-3"><strong>0</strong> Free Edit Credits</li>
                  <li class="list-group-item py-sm-3 text-light" style="background-color: #009B97;">
                      <a class="text-light" href="https://www.designercountry.com/get-quote" rel="preload"><b>ORDER NOW</b></a>
                  </li>
              </ul>
          </div>
          <div class="col-md-4">
              <ul class="list-group mb-3 text-center"
                  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #009b97;">
                      <h2 class="text-uppercase text-light">standard</h2>
                  </li>
                  <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #F8F8F8;">
                      <h1><b>$ 50 <sup>00</sup></b></h1>
                  </li>
                  <li class="list-group-item py-sm-3"><strong>54</strong> Edit Credits</li>
                  <li class="list-group-item py-sm-3"><strong>0.93</strong> per Credit</li>
                  <li class="list-group-item py-sm-3"><strong>4</strong> Free Edit Credits</li>
                  <li class="list-group-item py-sm-3" style="background-color: #283E4B;">
                      <a class="text-light" href="{{route('get.quote')}}" rel="preload"><b>ORDER NOW</b></a>
                  </li>
              </ul>
          </div>
          <div class="col-md-4">
              <ul class="list-group mb-3 text-center "
                  style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                  <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #283E4B;">
                      <h2 class="text-uppercase text-light">PREMIUM</h2>
                  </li>
                  <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #F8F8F8;">
                      <h1><b>$ 100 <sup>00</sup></b></h1>
                  </li>
                  <li class="list-group-item py-sm-3"><strong>110</strong> Edit Credits</li>
                  <li class="list-group-item py-sm-3"><strong>0.91</strong> per Credit</li>
                  <li class="list-group-item py-sm-3"><strong>10</strong> Free Edit Credits</li>
                  <li class="list-group-item py-sm-3 text-light" style="background-color: #009B97;">
                      <a class="text-light" href="{{route('get.quote')}}" rel="preload"><b>ORDER NOW</b></a>
                  </li>
              </ul>
          </div>
      </div>
      <h1 class="text-center pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Quantity Credits</h1>
      <p class="text-center mobile-pr mobile-pl">We have a big discount for bulk photo processing, you first get discount for editing
          100 files by ourselves, this process goes on a clipping path & shadow creation to get a real view.</p>
      <div class="custom_button text-center">
          <a href="https://www.designercountry.com/get-quote" class="btn btn text-uppercase" rel="preload">get your quote</a>
       </div>
  </div>
</section>
<!-- Pricing Section End -->
@endsection
@push('page-js')
@endpush