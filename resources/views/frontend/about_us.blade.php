@extends ('layouts.frontend.master')
@section ('page-title', 'Photo Editing Studio Provider Designer Country | About Designer Country')
@push('og-graph-tag')
<meta property="og:title" content="Photo Editing Studio Provider Designer Country | About Designer Country" />
<meta property="og:description" content="Photo Editing Studio Provider Designer Country | About Designer Country" />
<meta property="og:image" content="https://designercountry.com/assets/frontend/img/about/team.png" />
@endpush
@push('page-css')
<style type="text/css">
</style>
@endpush
@section ('page-content')
<!--About-Us Banner -->
<div class="about_us_bg">
  <div class="about-title text-center text-light">
    <h1>Our Team</h1>
    <p>We love what we do and come to work every day hungry to change the world of work!</p>
  </div>
</div>
<!-- End About Banner -->
<!-- About-Us Section -->
<section class="team section-bg">
  <div class="container">
    <div class="section-title px-2">
      <h2>About Us</h2>
      <p class="text-justify">Outsourcing Photoshop clipping path expert and design specialist – Designer Country basically has started its activities about 12 years ago in Dhaka based design but gradually its activities gets spread and now working with about 350+ clients from different European countries. The main common aspect and belief of its business policy basically dependent on the words below -The more we satisfy our clients, the more rapidly we take us worldwide with our activities. Here we have 150+ designer educated from Graphic Art Institute dedicate their whole contribution to support our clients. They all must first get to themselves primarily in a internee course in our studio for six months then selected them to do job in our studio farm. So here they get a good official training on design besides clients satisfaction.</p>
    </div>
    <div class="row justify-content-center pt-sm-4">
      <div class="col-lg-6 py-4">
        <div class="member">
          <div class="pic">
            <img src="{{ asset('assets/frontend/img/about/mostafizar_co_founder.png') }}" class="img-fluid" alt="mostafiz" loading="lazy">
          </div>
          <div class="member-info">
            <h4>Mustafigur Rahman</h4>
            <span><strong>President and CEO, Designer Country</strong></span>
            <p>I am honored as chief executive of Designer Country. As a chief executive determined to lead Designer Country to new heights, I am keenly aware of the immense responsibilities on my shoulders.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mt-4">
        <div class="member">
          <div class="pic">
            <img src="{{ asset('assets/frontend/img/about/Raziur_co_founde.png') }}" class="img-fluid" alt="Raziur" loading="lazy">
          </div>
          <div class="member-info">
            <h4>Raziur Rahman</h4>
            <span><strong>Co-Founder</strong></span>
            <p>As a co-founder, I think the goal of a designer is to listen, observe, understand, sympathize, empathize, synthesize, and glean insights that enable him or her to make the invisible visible.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-4">
        <div class="member">
          <div class="pic">
            <img src="{{ asset('assets/frontend/img/about/joynal_abedin_human.png') }}" class="img-fluid" alt="joynal" loading="lazy">
          </div>
          <div class="member-info">
            <h4>Joynal Abedin</h4>
            <span><strong>Human Resource</strong></span>
            <p>Financial Resources may be the lifeblood of a company, but human resources are the brains.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6  mt-4">
        <div class="member">
          <div class="pic">
            <img src="{{ asset('assets/frontend/img/about/azhar-raihan_.png') }}" class="img-fluid" alt="ahmed-juned" loading="lazy">
          </div>
          <div class="member-info">
            <h4>Azhar Raihan</h4>
            <span><strong>Engineer</strong></span>
            <p>The trouble with programmers is that you can never tell what a programmer is doing until it’s too late. A good programmer is someone who always looks both ways before crossing a one-way street.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6  mt-4">
        <div class="member">
          <div class="pic">
            <img src="{{ asset('assets/frontend/img/about/sadirul_amin_shipon.png') }}" class="img-fluid" alt="nisat" loading="lazy">
          </div>
          <div class="member-info">
            <h4>Sadirul Amin Shipon</h4>
            <span><strong>Senior Customer Support</strong></span>
            <p>To give real service you must add something which cannot be bought or measured with money, and that is sincerity and integrity.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6  mt-4">
        <div class="member">
          <div class="pic">
            <img src="{{ asset('assets/frontend/img/about/nishat_salsabil.png') }}" class="img-fluid" alt="sadirul-alam" loading="lazy">
          </div>
          <div class="member-info">
            <h4>Nishat Salsabil</h4>
            <span><strong>Senior Customer Support</strong></span>
            <p>We see our customers as invited guests to a party, and we are the hosts. It’s our job to make the customer experience a little bit better.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6  mt-4">
        <div class="member">
          <div class="pic">
            <img src="{{ asset('assets/frontend/img/about/ahmed_juned.png') }}" class="img-fluid" alt="azhar_raihan" loading="lazy">
          </div>
          <div class="member-info">
            <h4>Ahmed Juned</h4>
            <span><strong>Senior Customer Support</strong></span>
            <p>Every company’s greatest assets are its customers because without customers there is no company.</p>
          </div>
        </div>
        
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About-Us Section -->
<!-- Client About Section Start -->
<section>
  <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
    <div class="row">
      <div class="col-md-6 col-12">
        <div class="pt-3">
          <h3>Behind The Success of Designer Country</h3>
          <p>Here we appreciate to you let see our team who confidently work on your images without any communication with you. The President and CEO of Designer Country request you to thank them as they keep confidence on their creativity.</p>
          <div class="custom_button text-center">
            <a href="{{route('get.quote')}}" rel="preload">GET A QUOTE</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12">
        <a href="{{route('about.us')}}" rel="preload">
          <img src="{{asset('assets/frontend/img/about/team.png')}}" alt="team-member" class="img-fluid" loading="lazy">
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End Client About Section -->
@endsection
@push('page-js') 
@endpush