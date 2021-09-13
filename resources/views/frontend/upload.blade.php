@extends ('layouts.frontend.master')
@section ('page-title', 'Best Photo Editing Services | Photo Retouching')
@push('og-graph-tag')
<meta property="og:title" content="Designer Country | Home-Page" />
<meta property="og:description" content="DC- Perfect High-quality, professional clipping paths and image-editing services, Image masking, color correction, Photo Retouching, Removal Background, Get a quote for your next project." />
<meta property="og:image" content="https://designercountry.com/assets/frontend/img/hero-img_1.png" />
@endpush
@push('page-css')
<style type="text/css">
.upload-file .custom_button a{
    display: block;
}
</style>  
@endpush
@section ('page-content')
<!-- Upload Section Start -->
<section class="mobile-common-page">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 px-2">
        <div>
            <h1 class="py-3 text-center">Start a Project with Designer Country</h1>
        </div>
        <hr>
        <div class="pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <h3 class="pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">File Upload Instruction </h3>
                    <p>You may upload your images to us via We Transfer, Drop Box, FTP or you may see the links of them
                        beside
                        here. Please after uploading the images, write down the instructions clearly with the time
                        limitation
                        noted that for rush image processing. You need not to pay us advance. We have the Capacity to
                        deliver the
                        completed images with 2 hours at least.
                        To make all kinds of photos editing, you need not to upload the images in different places, we
                        are ready
                        to receive your projects, at least 25 minutes we may take to reply you for your project
                        confirmation. Have
                        you rush work? No problem, deliver us, we have the best working ability to make your photo
                        Qualified based
                        photo editing in your expected area.</p>
                </div>
                <div class="upload-file col-md-12 col-lg-4 col-xl-4 pt-sm-4 mobile-pt-20 ">
                    <h3 class="pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">Upload Files</h3>
                    <div class="custom_button text-center pt-0">
                        <a href="https://designercountry.wetransfer.com/" target="_blank" class="btn btn-block"><i class="fas fa-paper-plane mr-2"></i> We Transfer</a>
                        <a href="https://www.myairbridge.com/en/#!/" target="_blank" class="btn btn-block" rel="preload"><i class="fas fa-arrow-alt-circle-right mr-2"></i> Myairbridge</a>
                        <a href="https://designercountry.wetransfer.com/" target="_blank" class="btn btn-block" rel="preload"><i class="fas fa-images text-center mr-2"></i> FTP</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_button text-center py-md-5 py-sm-3 py-xs-2">
            <div class="row py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
                <div class="col-md-8 offset-md-2">
                    <h2 class="pb-1">Have a Project? </h2>
                    <p class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Not finding what you are looking for? We welcome you to try our service free of
                        charge.</p>
                    <a href="{{route('contact')}}" class="btn btn text-uppercase" rel="preload">contact Support</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Upload Section End -->
@endsection
@push('page-js')
@endpush
