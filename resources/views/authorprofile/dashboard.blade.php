@extends ('layouts.authorprofile.authorprofile-layouts')
@section ('title', 'Clipping Path Cut Out Services provider Background Change Image Editing Services')
@push('css')
<style type="text/css">
</style> 
@endpush
@section('page-content')
  <!-- Free Trail Head-->
  <section class="mobile-common-page pt-5 mobile-pb-20">
    <div class="container py-sm-4 py-md-5 py-lg-5">
      <div class="row justify-content-center">
        <div class="col-sm-9">
          <h2 class="text-center">Designer Country always works for businesses at an affordable price. And arranges a free trial to show as a sample at all times</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- End Free Trail-->
  <!-- Free Trail Section-->
  <section class="free-trail">
    <div class="container">
      <div class="free-trail-head text-center text-light pt-col-3 pt-sm-4 pt-md-5">
        <h2>Get your photos edited for free</h2>
        <p class="py-col-2 py-sm-2 py-md-3">Not ready to submit your full order? Upload one sample images and we'll edit them for free.</p>
      </div>
      <div class="free-trail-body text-light">
        <form action="{{ route('free.trail.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 pt-col-3 pt-sm-3 pt-md-4">
              <div class="custom-select2">
                <label for="sellection" class="pb-1 pb-sm-2 pb-md-3 mobile-pt-10">
                  <strong>Select Category:</strong>
                </label>
                <select class="form-control" id="sellection" name="category">
                    <option disabled selected value>Select Category</option>
                    <option value="Clipping Path">Clipping Path</option>
                    <option value="Background Removal">Background Removal</option>
                    <option value="Image Masking">Image Masking</option>
                    <option value="Natural Shadow">Natural Shadow</option>
                    <option value="Photo Retouching">Photo Retouching</option>
                    <option value="Ghost Mannequin">Ghost Mannequin</option>
                    <option value="Product Photo Editing">Product Photo Editing</option>
                    <option value="Color Correction">Color Correction</option>
                    <option value="Vector Correction">Vector Correction</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-col-3 pt-sm-3 pt-md-4">
              <div class="email-section form-group">
                <label for="email" class="pb-1 pb-sm-2 pb-md-3 mobile-pt-10"><strong>Email Address:</strong></label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
          </div>
          <div class="custom_button text-center">
            <p>You Can Upload Only Single Image For Free Trial :(</p>
            <button type="submit" class="btn submit">Submit Free Trail</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- End Free Trail Section-->
@endsection
@push('js')
@endpush


