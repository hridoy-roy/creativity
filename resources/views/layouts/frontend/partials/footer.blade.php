<footer class="footer">
  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <h4>Join Our Newsletter</h4>
          <p>Get our latest updates, service details, free trial offer info, and all blog posts in your email.</p>
          <form action="{{ route('subscriber') }}" method="post">
            @csrf
            <div class="input-group form-group">
              <input type="email" class="form-control @error ('s_email') is-invalid @enderror" placeholder="example@gmail.com" aria-label="example@gmail.com" name="s_email" required>
              @error('s_email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              <button class="btn btn-subscribe" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 footer-links">
          <h4>
            <span style="border-bottom: 1px solid #1ae6df; padding-bottom: 8px;">Information</span>
          </h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('faq') }}">Faq</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('sample') }}">Samples</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('terms.and.conditions') }}">Terms & Conditions</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('privacy.and.policy') }}">Privacy & Policy</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('refund.policy') }}">Refund Policy</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6 footer-links">
          <h4><span style="border-bottom: 1px solid #1ae6df; padding-bottom: 8px;">Company</span></h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about.us') }}">About</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('photo.gallery') }}">Photo Gallery</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('pricing') }}">Pricing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('payment.method') }}">Payment Method</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Support Center</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6 footer-links">
          <h4><span style="border-bottom: 1px solid #1ae6df; padding-bottom: 8px;">Services</span></h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('clipping.path') }}">Clipping Path</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('background.removal') }}">Background Removal</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('image.masking') }}">Image Masking</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('natural.shadow') }}">Natural Shadow</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('photo.retouching') }}">Photo Retouching</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('ghosht.manneuquin') }}">Ghost Mannequin</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('product.photo.editing') }}">Photo Editing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('color.correction') }}">Color Correction</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('vector.conversion') }}">Vector Conversion</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-6 footer-links">
          <h4><span style="border-bottom: 1px solid #1ae6df; padding-bottom: 8px;">Get Started</span></h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('get.quote') }}">Get quote</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('free.trial') }}">Free Trial</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('upload') }}">Upload</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Log in</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('register') }}">Sig up</a></li>
          </ul>
        </div>
      </div> 
      <hr>
      <div class="dc-social-media mobile-pb-20">
        <a href="https://www.facebook.com/designercountry" target="blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/designercounty" target="blank">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.linkedin.com/company/designer-country" target="blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://www.instagram.com/designercountry" target="blank">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="container mobile-py-20">
    <div class="row py-sm-4">
      <div class="col-12">
        <div class="copyright text-light text-center">
          &copy; Copyright <strong><span>Designer Country</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </div>
</footer>