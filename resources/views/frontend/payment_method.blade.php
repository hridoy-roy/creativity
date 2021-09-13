@extends ('layouts.frontend.master')
@section ('page-title', 'Payment-Method')
@push('og-graph-tag')
<meta property="og:title" content="Designer Country | Payment Method" />
<meta property="og:description" content="Payment-Method" />
<meta property="og:image" content="http://designercountry.com/assets/frontend/img/payment_method/Payment_Method_Designer_Country.png" />
@endpush
@push('page-css')
<style type="text/css">
</style>
@endpush
@section ('page-content')
<!-- Payment Method Section Start -->
<section class="mobile-common-page">
    <div class="container pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
        <div class="pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4">
            <h1 class="text-center pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4"><span style="border-bottom: 2px solid #19BEB9; padding-bottom: 20px;">Our Payment Method</span></h1>
        </div>
        <div class="payment-method-body py-col-2 py-sm-2 py-md-3 py-lg-4 py-xl-4 mt-4 px-2">
            <h3 class="pb-md-3 pb-sm-2 mobile-pt-20">Payment Method to Designer Country</h3>
            <p>Designer Country(DC) always use the clients advantageous <a href="https://www.paypal.com"  target="blank" rel="preload"> <span class="payment-m">Payment</span><span class="method">Method</span></a> to make the
                payment
                to Designer Country, a leading photo clipping path & image retouching service provider company. Here you
                actually not in necessary to set up an account or complex method, besides we do not use any advance
                payment
                before doing photo editing. As we are in a base of “Your satisfaction is our wealth & way to
                progress”<br><br>
                In a simple way, the clients of us make the supply his name, email & adress with contact info. When we
                complete your image processing project, after sending the file of images with this we will send also you
                an
                Invoice to pay us; here if you are regular customer, you may follow the monthly payment system. The
                payment
                Invoice we send to you must have all the information that you need to
        </div>
        <hr>
        <div class="payment pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4 text-center">
            <a href="https://www.paypal.com" target="blank" rel="preload">
                <img src="{{asset('assets/frontend/img/payment_method/Payment_Method_Designer_Country.png')}}" alt="Payment-method" loading="lazy" class="img-fluid"
                    style="width: 55%;">
            </a>
        </div>
        <div class="custom_button text-center">
            <div class="pb-sm-4">
                <h2>Do You Need Photos Edited For Your Website?</h2>
                <p>Please contact us right now we are happy to support you.</p>
            </div>
            <a href="{{route('contact')}}" class="btn btn mt-1 text-uppercase" rel="preload">Contact us</a>
        </div>
        <hr>
    </div>
</section>
<!-- Payment Method Section End -->
<!-- Tag Section Start -->
@include ('layouts.frontend.partials.tag')
<!-- Tag Section End -->
@endsection
@push('page-js')
@endpush
