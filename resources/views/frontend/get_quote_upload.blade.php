@extends ('layouts.frontend.master')
@section ('paege-title', 'Get-Quote-Upload')
@push('og-graph-tag')
<meta property="og:title" content="Designer Country | Get-Quote-Upload" />
<meta property="og:description" content="Photo Editing | Get-Quote-Upload" />
<meta property="og:image" content="https://designercountry.com/assets/frontend/img/hero-img_1.png" />
@endpush
@push ('page-css')
<style type="text/css">
</style>
@endpush
@section ('page-content')
<!-- File Upload  -->
<section class="file_upload_message mobile-common-page mobile-pb-10">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="row justify-content-center">
            <div class="col-md-10 pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
                <div>
                    <h2>Hello <strong>{{ Session::get('name')}}!</strong></h2>
                    <h5 class="pt-3"><b>Upload Your Images</b></h5>
                    <p>To complete your quote request, please upload a few of your images so we can base the complexity and provide you an accurate quote.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End File Upload  -->
<!-- File Upload Body  -->
<section class="file_upload_body mobile-py-20">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="row file-upload justify-content-center">
            <div class="col-md-10">
                <form action="#" method="#">
                    <div class="card" type="file">
                        <div class="card-header py-col-3 py-sm-3 py-md-4 py-lg-4 py-xl-4">
                            <div class="card-title">
                                <h3>Upload sample image(s)*</h3>
                                <span>
                                    You can upload the following file types: JPG (preferred), PSD, TIFF, PNG, NEF, RAW, CR2,
                                    DNG, PDF
                                </span>
                            </div>
                        </div>
                        <a href="https://designercountry.wetransfer.com/" target="_blank" rel="preload">
                            <div class="card-body dropzone dz-clickable text-center">
                                <i class="fas fa-plus-circle"></i>
                                <h5 class="py-4">Add Your Images</h5>
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End File Upload Body -->
@endsection
@push('page-js')
@endpush
