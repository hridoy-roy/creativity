@extends ('layouts.frontend.master')
@section ('page-title', 'Clipping Path Cut Out Service | Photo Editing Company')
@push('og-graph-tag')
<meta property="og:title" content="Clipping Path Cut Out Service | Photo Editing Company" />
<meta property="og:description" content="Designer Country | Contact" />
<meta property="og:image" content="https://designercountry.com/assets/frontend/img/hero-img_1.png" />
@endpush
@push('page-css')
<style type="text/css">
  .contact{
    background: #EDEDED;
  }
</style>
@endpush
@section ('page-content')
<!--  Contact  -->
<section class="contact pb-col-3 pb-sm-4 pb-md-5 mobile-pt-20">
  <div class="container pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
    <div class="section-title">
      <h2>Contact</h2>
      <h3>Feel to free contact us becase we are always active for you!</h3>
      <p>We wold give to like you any support to achieve your setecfaction.</p>
    </div>
    <!-- <div class="row">
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>Dhaka, Bangladesh</p>
          </div>
          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>
              <a href="mailto:designercountry@gmail.com" rel="preload">info@designercountry.com</a>
            </p>
          </div>
          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call & Whatsapp:</h4>
            <p>
              <a href="tel:+8801914106753" rel="preload">+8801914106753</a>
            </p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4655.227807798314!2d90.3887027!3d23.7507683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb54f6ebcd%3A0xe7dfdca493b15269!2sDesigner%20Country!5e1!3m2!1sen!2sbd!4v1613878857705!5m2!1sen!2sbd" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="{{ route('contact.send') }}" method="POST" class="php-email-form">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group col-md-6">
              <label for="email">Your Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject">
              @error('subject')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
          </div>
          <div class="row">
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="10" id="message"></textarea>
            @error('message')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn submit">Send Message</button>
          </div>
        </form>
      </div>
    </div> -->
    <div class="row">
      <div class="col-md-4">
        <div class="info">
          <i class="icofont-google-map"></i>
          <h4 class="py-3">Location:</h4>
          <a>Dhaka, Bangladesh</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info">
          <i class="icofont-envelope"></i>
          <h4 class="py-3">Email:</h4>
          <a href="mailto:info@designercountry.com">info@designercountry.com</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info">
          <i class="icofont-phone"></i>
          <h4 class="py-3">Call & Whatsapp:</h4>
          <a href="tel:+8801914106753">+8801914106753</a>
        </div>
      </div>
    </div>
    <div class="row pt-4">
      <div class="col">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4655.227807798314!2d90.3887027!3d23.7507683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb54f6ebcd%3A0xe7dfdca493b15269!2sDesigner%20Country!5e1!3m2!1sen!2sbd!4v1613878857705!5m2!1sen!2sbd" class="google-map" style="border:0; border-radius: 5px;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>
<!-- End Contact  -->
@endsection
@push('page-js')
@endpush