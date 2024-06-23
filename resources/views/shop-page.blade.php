@extends('layout.app-shop')
@section('title'){{ 'Shop Page' }}@endsection
@section('home')
<section class="showcase">
    <div class="video-container desktop">
        <video src="{{ asset('shop/assets/images/mainmotionn_1_mobile.mp4') }}" autoplay muted loop></video>
    </div>
    <div class="content">
        <h1>CONNECT SMART. NOT HARDER</h1>
        <h3>THE FUTURE OF NETWORKING</h3>
        <h3>THE SUSTAINABLE SOLUTION FOR NEXT-LEVEL NETWORKING</h3>
        <div class="iq-button">
            <a href="{{route('shop_page')}}" class="btn text-uppercase position-relative">
                <span class="button-text">SHOP CARDS</span>
                <i class="fa-solid fa-play"></i>
            </a>
             <a href="" class="btn text-uppercase position-relative">
                <span class="button-text">LOGIN TO CARD</span>
                <i class="fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</section><br></br><br>

@include('new-card-welcone-page')


 <h2 class="tit">How It Works</h2>
  <!--Month entry cards-->

  <main class="container">
    <a href="{{route('view_all')}}">
       <article class="card">
          <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify-5578.jpg?v=1681992324&width=1300" alt="September Logo" />
          <div class="info">
             <h2>
                Step 1
             </h2>
             <h3>

             </h3>
             <p>
                Select from variety of smart products tailored to fit your lifestyle,brand and needs.
             </p>
          </div>
       </article>
    </a>

    <a href="https://toch.am/register-user">
       <article class="card">
          <img src="https://v1ce.co/cdn/shop/files/V1CE-Shopify--3_45a4821f-7724-405a-9c60-aca328c10d1a.jpg?v=1683381420&width=1300" alt="October Logo" />
          <div class="info">
             <h2>
                Step 2
             </h2>
             <h3>

             </h3>
             <p>
                Create Your Free Profile Add new card to your profile and upload all your contact information, social media, brand logo, price list and more.
             </p>
          </div>
       </article>
    </a>

    <a href="https://toch.am/faq">
       <article class="card">
          <img src="https://v1ce.co/cdn/shop/files/V1CE-Table-Talkers-0018.jpg?v=1691439154&width=1300" alt="November Logo" />
          <div class="info">
             <h2>
                Step 2
             </h2>
             <h3>

             </h3>
             <p>
                Start Networking New youcan share all your information to others with just a touch! Need help? See our FAQ

             </p>
          </div>
       </article>
    </a>

    {{-- <a href="#">
       <article class="card">
          <img src="https://v1ce.co/cdn/shop/files/bundles_square_compressed.png?v=1694598372&width=600" alt="December Logo" />
          <div class="info">
             <h2>
                December 2021
             </h2>
             <h3>
                Making a mad dash for the line
             </h3>
             <br />
             <p>
                The end of December marks the end of part one of my study plan.
             </p>
          </div>
       </article>
    </a> --}}

 </main>

 <!-- Include jQuery from CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <!-- Include SweetAlert script first -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Your JavaScript code -->
<script src="{{asset('assets/js/ajax-add-to-card.js')}}"></script>

@endsection
