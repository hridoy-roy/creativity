@extends ('layouts.frontend.master')
@section ('page-title', 'Clipping Path Cut Out Services Provider | Image & Photo Editing')
@push('og-graph-tag')
<meta property="og:title" content="Clipping Path Cut Out Services Provider | Image & Photo Editing" />
<meta property="og:description" content="DC- Perfect High-quality, professional clipping paths and image-editing services, Image masking, color correction, Photo Retouching, Removal Background, Get a quote for your next project." />
<meta property="og:image" content="https://designercountry.com/assets/frontend/img/hero-img_1.png" />
<meta name="google-site-verification" content="Wf1tiOhnwW6bBUkA_ELmHNwrWL-UAP095Owc5aH4afI" />
@endpush
@push('page-css')
<style type="text/css">
.common-page-style{
  padding-top: 0px !important;
}

</style>  
@endpush
@section('page-content')
<a href="https://api.whatsapp.com/send?phone=+8801914106753&text=Hi There! I'm looking for someone at Designer Country" class="float" target="_blank">
<i class="fab fa-whatsapp my-float"></i>
</a>
  <!-- Hero Section Start-->
  <section id="hero" class="d-flex align-items-center">
    <div class="container mobilb-pb-20">
      <div class="row">
        <div class="hero-content col-md-6 pt-4 pt-lg-0">
          <h1>Professional Product & Photo Editing Services</h1>
          <h2>Perfect Clipping Path & Photoshop Services, Start $0.39 Per Photo, Online Support for Every Time!
          </h2>
          <div class="d-lg-flex">
            <a href="{{ route('get.quote') }}" class="btn-get-started scrollto" rel="preload">Get Started</a>
            <a href="https://youtu.be/aSW6xUAMi7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true" rel="preload"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-md-6 order-1 order-lg-2 hero-img mobile-mt-20 mobile-pt-20">
          <img src="{{ asset('assets/frontend/img/hero-img_1.png') }}" class="img-fluid animated" alt="banner" loading="lazy">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section-->
  <!-- Around Section Start -->
  <section class="around">
    <div class="container pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
      <h1 class="text-center pt-md-3 pt-lg-4 mobile-pt-20"><strong>Our Professional Photo Editing Services</strong></h1>
      <h2 class="resize-tag text-center pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4  pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5 mobile-py-20">Photo
        Resize, Retouch & Manipulation
        With Color Change Adjustment Designer Country Expert In Photoshop For Online Product</h2>
      <div class="row py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="col-md-6">
          <img src="{{asset('assets/frontend/img/home_page/Shoes.png')}}" alt="shose" class="img-fluid" loading="lazy">
        </div>
        <div class="col-md-6 m-lg-auto">
          <h3 class="pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4 mobile-pt-10"><a href="{{route('clipping.path')}}"
              target="_blank" rel="preload">Clipping Path</a> </h3>
          <p>Professionalized including People, Vehicles, Automobile, Shoe, Bags, Food, Retail,
            Jewelry &
            other products Clipping Path we provide for E-commerce customization& Digitalization to
            advertisement
            upgrading in the reasonably priced&discount offer.</p>
        </div>
      </div>
      <div class="row my-col-2 my-sm-3 my-md-4 my-lg-5 my-xl-5">
        <div class="col-md-6 m-lg-auto">
          <h3 class="pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4 mobile-pt-10"><a href="{{route('natural.shadow')}}"
              target="_blank" rel="preload">Original Shadow</a></h3>
          <p class="py-col-2 py-sm-2 py-md-3 py-lg-4 py-xl-4">Infrequently e-commerce photos when shoot, shadow ought to
            be
            obscure
            & huge dark and the photos lose their real-life&substantive view. So at the time of using them as
            resources,
            they fail to attract client’s eye. So we create original shadow on them.</p>
        </div>
        <div class="col-md-6 mobile-py-10">
          <img src="{{asset('assets/frontend/img/home_page/Shadow_Designer_Country.png')}}" alt="Glasses"
            class="img-fluid" loading="lazy">
        </div>
      </div>
      <div class="row pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
        <div class="col-md-6">
          <img src="{{asset('assets/frontend/img/home_page/Product_Editing_Designer_Country.png')}}" alt="Clock" class="img-fluid">
        </div>
        <div class="col-md-6 m-lg-auto mobile-pt-10">
          <h3 class="pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4"><a href="{{route('photo.retouching')}}"target="_blank" rel="preload">Product Photo Editing</a></h3>
          <p>Hats, Accessories, Clothes, Apparel, Computers & Electronics Photos to optimize by
            Resize,
            white background, retouch, color coordination & manipulated; we call for clients in low-priced. Our
            Product
            Designers customize service successive to awaited area.</p>
        </div>
      </div>
      <div class="custom_button text-center">
        <a href="{{route('sample')}}" class="btn btn" rel="preload">SEE ALL IMAGE-EDITING SAMPLE</a>
      </div>
    </div>
    <div class="container">
      <hr>
    </div>
  </section>
  <!-- End Around Section  -->
  <!-- How To Work Section Start -->
  <section class="howWork">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 mobile-py-20">
      <h1 class="text-center">How To Work</h1>
      <div class="row pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
        <div
          class="how-to-element col-md-4 text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5 mobile-pt-20">
          <i class="fas fa-laptop pb-3"></i>
          <h5 class="text-center"><span><b>1 .</b></span> Requst a quote for the images you need edited</h5>
        </div>
        <div
          class="how-to-element col-md-4 text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5 mobile-pt-20">
          <i class="fas fa-envelope pb-3"></i>
          <h5 class="text-center"><span><b>2 .</b></span> Receive an email with your quote in 45 minutes or less
          </h5>
        </div>
        <div
          class="how-to-element col-md-4 text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5 mobile-pt-20">
          <i class="far fa-thumbs-up pb-3"></i>
          <h5 class="text-center"><span><b>3 .</b></span> Give us the Green light to move forword with your
            project</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div
          class="how-to-element col-md-4 text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5 mobile-pt-20">
          <i class="fas fa-tachometer-alt pb-3"></i>
          <h5 class="text-center"><span><b>4 .</b></span> Get Your Images in as little as six hourse</h5>
        </div>
        <div
          class="how-to-element col-md-4 text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5 mobile-pt-20">
          <i class="fas fa-file-invoice-dollar pb-3"></i>
          <h5 class="text-center"><span><b>5 .</b></span> Sell lots of products and make your clients happy !</h5>
        </div>
        <div class="col-md-2"></div>
      </div>
      <hr>
    </div>
  </section>
  <!-- EndHow To Work Section -->
  <!-- About Article Section Start -->
  @include ('layouts.frontend.partials.why_designer_country')
  <!-- End About Article Section -->
  <!-- Design Sample Section Start -->
  <section class="design_sample">
    <div class="container pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
      <div class="pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
        <h1 class="text-center pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">See Our Work</h1>
        <p class="text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5 px-md-5 px-sm-4 px-xs-3 mobile-pb-10">Outsourcing image editing
          expart and
          made
          clipping path & photo retouching carefully make your online product store & photography professional
          with
          attractive photos</p>
        <img src="{{asset('assets/frontend/img/home_page/Dc_Home_sample1.png')}}" alt="Sample" class="img-fluid" loading="lazy">
      </div>
      <div class="custom_button text-center">
        <a href="{{route('sample')}}" class="btn btn text-uppercase" rel="preload">See More</a>
      </div>
    </div>
  </section>
  <!-- End Design Sample Section -->
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
                <select class="form-control @error ('category') is-invalid @enderror" id="sellection" name="category" required>
                    <option disabled selected>Select Category</option>
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
                @error('category')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="col-sm-6 col-md-4 pt-col-3 pt-sm-3 pt-md-4">
              <div class="email-section form-group">
                <label for="email" class="pb-1 pb-sm-2 pb-md-3 mobile-pt-10"><strong>Email Address:</strong></label>
                <input type="email" class="form-control @error ('email') is-invalid @enderror" id="email" name="email" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
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
  <!-- My Countery  Section Start -->
  <section class="mobile-pt-20">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
      <div class="row pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
        <div class="col-md-6 col-12">
          <h3 class="pb-col-1 pb-sm-2 pb-md-2 pb-lg-3 pb-xl-3 mobile-pb-10">Accountable to modify the world for a perfect place.</h3>
          <p>Here having the intention and commitment to modify the world business depending on Internet sale, our mission
            is to save world by providing legal labour service.</p>
          <div class="custom_button text-center" style="padding: 15px 0px;">
            <a href="{{route('about.us')}}" class="btn btn text-uppercase" rel="preload">learn more</a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="{{asset('assets/frontend/img/home_page/Dc_Flag_of_Bangladesh.png')}}" alt="Bangladesh_flag" class="img-fluid" loading="lazy" style="width: 100%;">
        </div>
      </div>
      <hr>
    </div>
  </section>
  <!-- End My Countery  Section -->
  <!-- Happyness Section Start -->
  <section>
    <div class="container">
      <h1 class="text-center mobile-pb-10">
        Waiting for work is Together for a Prosperous Relationship
      </h1>
      <p class="px-2 px-sm-3 px-md-4 px-lg-5 px-xl-5 py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 mobile-pb-10">
        At Clipping Path Cut Out, we rely on the belief that a photo editing service can successfully do well for your
        career and sales for a better life, And the maximum impression of your godsend will be on us constantly. That is
        why Clipping Path Cut Out is illuminated to support you seeing this simple clipping path service for a better
        environment for our stuffs lives. Make a fair low-cost based payment to us that you think we can call for rate &
        also have no demand.
      </p>
      <div class="px-2 px-md-5 px-sm-4 px-xs-3 pb-md-5 pb-sm-4 pb-xs-3">
        <h3 class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4 mobile-pt-20 mobile-pb-10">Outsource E-Commerce Photo Selection & Editing Service -
          Designer
          Country
        </h3>
        <p>Digitalized marketing & product exhibition commercially photo editing is an emerging section of
          photography.
          We submit & offer low-cost outsource images service in European & American Countries.</p><br>
        <p>Whenever you are a photographer with the most laborious & busiest photographer, we offer you after shoot
          production service to preserve your hours & money. Think about where you search a responsible & talented
          outsource image editing provider? Maximum time it turns into substantive challenge to find a competent,
          organized & effective photo editing company. Designer Country a sample approved based outsourcer where
          you
          offer project after only the acceptance & satisfaction to our sample product you will send.</p><br>
        <p>Our team supporters are on good terms with your expected impenetrable performance, greater maximum
          creativity
          and concentrated cognizance of how to stand up for your images display. For every project file, we will
          be
          lightly and cautiously attentive to your instructions and all of us edit your images in accordance with
          your
          editing plan.</p><br>
        <p>Designer Country is advanced with Cut Out or Clipping Path, Masking Multiple, Background Removal, Shadow
          Add,
          Retouch, Restoration, Image Manipulation, and Logo & Vector Design with accessible payment.</p><br>
      </div>
    </div>
  </section>
  <!-- End Happyness Section -->
  <!--Cta Section Start -->
  <section class="cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="https://api.whatsapp.com/message/EKCAQXCCQWYKA1" rel="preload">Call To Action</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Cta Section -->
  <!-- Sponsor  Section Start -->
  <section class="mobile-pt-20">
    <div class="container pt-sm-5 pt-xl-5">
        <div class="row pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
            <div class="col-md-5 m-auto">
                <h1 class="text-center">WHO WE WORK WITH</h1>
            </div>
            <div class="col-md-7 text-center work-brand">
              <img src="{{asset('assets/frontend/img/home_page/brand.png')}}" alt="brand"
            class="img-fluid" loading="lazy">
            </div>
        </div>
        <hr>
    </div>
  </section>
  <!-- End Sponsor  Section -->
<!-- Tag Section Start -->
@include ('layouts.frontend.partials.tag')
<!-- End Tag Section -->
@endsection
@push('page-js')
@endpush