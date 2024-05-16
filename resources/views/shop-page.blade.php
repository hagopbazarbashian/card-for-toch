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
                <span class="button-text">LOGIN</span>
                <i class="fa-solid fa-play"></i>
            </a>
        </div>
    </div>
</section><br></br><br>
{{-- <section class="category-slider-block">
    <div class="container-fluid">
       <div class="text-center">
          <h4 class="my-4 mt-md-3 mt-sm-3">Best Selling Card</h4>
       </div>
       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="3" data-mobile="2" data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
          <ul class="list-inline swiper-wrapper p-0 m-0">
            @foreach ($newproducts as $product)
            @foreach ($product->photo as $photo)
                <li class="swiper-slide slide-item">
                    <div class="category-inner position-relative">
                        <div class="category_image">
                            <a href="shop/shop.html">
                                <img src="{{ asset('product-images/' . $photo->photo) }}" class="img-fluid" alt="catImg-01" />
                            </a>
                            <div class="category-details">
                                <h5 class="category-title">
                                    <a href="./shop-category.html">
                                        {{ $product->id }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
            @endforeach
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
       </div>
    </div>
 </section> --}}

 <section class="mobile">
    <div class="container-fluid p-xl-0">
       <div class="row gx-lg-0">
          <div class="col-lg-4 col-md-6 d-flex flex-column">
             <div class="product-box left-1-productbox">
                <a href="{{route('single_card',$newproductszoom1->id)}}" class="card-link"></a>
                <div class="card-img-overlay product-card-img-overlay" style="background-image: url({{ asset('product-images/' . $newproductszoom1->photo[0]->photo) }});"></div>
                <div class="card-body w-100">
                   <h4 class="parent-heading">{{$newproductszoom1->title}}</h4>
                   <div class="iq-button link-button">
                      <a href="" class="btn text-capitalize position-relative">
                         <span class="button-text" style="color:#68b7e2">Shop Now</span>
                      </a>
                   </div>
                </div>
             </div>
             {{-- <div class="product-box left-2-productbox">
                <a href="./shop/shop.html" class="card-link"></a>
                <div class="card-img-overlay product-card-img-overlay mt-lg-0 mt-md-4 mt-4" style="background-image: url(./assets/images/shop/card/02.webp);"></div>
                <div class="card-body w-100">
                   <h5 class="card-title">Harry David</h5>
                   <h4 class="parent-heading">Warner Bro Films</h4>
                   <div class="iq-button link-button">
                      <a href="" class="btn text-capitalize position-relative">
                         <span class="button-text" style="color:#68b7e2">Shop Now</span>
                      </a>
                   </div>
                </div>
             </div> --}}
          </div>
          {{--
          <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
             <div class="center-productbox product-box">
                <a href="./shop/shop.html" class="card-link"></a>
                <div class="card-img-overlay product-card-img-overlay" style="background-image: url(./assets/images/shop/card/03.webp);"></div>
                <div class="card-body w-100">
                   <h5 class="card-title">Avengers</h5>
                   <h4 class="parent-heading">Marvel Studios</h4>
                   <div class="iq-button link-button">
                      <a href="" class="btn text-capitalize position-relative">
                         <span class="button-text">Shop Now</span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
          --}}
          <div class="col-lg-4 col-md-12 d-flex flex-column mt-lg-0 mt-md-4 mt-4">
             <div class="product-box right-1-productbox">
                <a href="{{route('single_card',$newproductszoom1->id)}}" class="card-link"></a>
                <div class="card-img-overlay product-card-img-overlay md-mt-5" style="background-image: url({{ asset('product-images/' . $newproductszoom2->photo[0]->photo) }});"></div>
                <div class="card-body w-100">
                   <h4 class="parent-heading">{{$newproductszoom2->title}}</h4>
                   <div class="iq-button link-button">
                      <a href="" class="btn text-capitalize position-relative">
                         <span class="button-text" style="color:#68b7e2">Shop Now</span>
                      </a>
                   </div>
                </div>
             </div>
             {{-- <div class="product-box right-2-productbox">
                <a href="./shop/shop.html" class="card-link"></a>
                <div class="card-img-overlay product-card-img-overlay mt-lg-0 mt-md-4 mt-4" style="background-image: url(./assets/images/shop/card/05.webp);"></div>
                <div class="card-body w-100">
                   <h5 class="card-title">Fantasia</h5>
                   <h4 class="parent-heading">Disney World</h4>
                   <div class="iq-button link-button">
                      <a href="" class="btn text-capitalize position-relative">
                         <span class="button-text" style="color:#68b7e2">Shop Now</span>
                      </a>
                   </div>
                </div>
             </div> --}}
          </div>
          <div class="col-lg-4 col-md-12 d-flex flex-column mt-lg-0 mt-md-4 mt-4">
             {{-- <div class="product-box right-1-productbox">
                <a href="./shop/shop.html" class="card-link"></a>
                <div class="card-img-overlay product-card-img-overlay md-mt-5" style="background-image: url(./assets/images/shop/card/04.webp);"></div>
                <div class="card-body w-100">
                   <h5 class="card-title">Harry David</h5>
                   <h4 class="parent-heading">Warner Bros Films</h4>
                   <div class="iq-button link-button">
                      <a href="" class="btn text-capitalize position-relative">
                         <span class="button-text" style="color:#68b7e2">Shop Now</span>
                      </a>
                   </div>
                </div>
             </div> --}}
             <div class="product-box right-2-productbox">
                <a href="{{route('single_card',$newproductszoom1->id)}}" class="card-link"></a>
                <div class="card-img-overlay product-card-img-overlay mt-lg-0 mt-md-4 mt-4" style="background-image: url({{ asset('product-images/' . $newproductszoom3->photo[0]->photo) }});"></div>
                <div class="card-body w-100">
                   <h4 class="parent-heading">{{$newproductszoom3->title}}</h4>
                   <div class="iq-button link-button">
                      <a href="" class="btn text-capitalize position-relative">
                         <span class="button-text" style="color:#68b7e2">Shop Now</span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>

{{-- <div class="newest-product-block section-padding-top">
    <div class="container-fluid">
       <div class="overflow-hidden">
          <div class="d-flex align-items-center justify-content-between px-3 my-4">
             <h5 class="main-title text-capitalize mb-0">Newest Products</h5>
             <a href="shop/view-all-product.html" class="text-primary iq-view-all text-decoration-none flex-none">Want More?</a>
          </div>
          <div class="card-style-slider">
             <div class="position-relative swiper swiper-card" data-slide="5" data-laptop="5" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="false" data-loop="true" data-navigation="true" data-pagination="true">
                <ul class="p-0 swiper-wrapper m-0 list-inline">
                    @foreach ($newproducts as $product)
                    @foreach ($product->photo as $photo)
                    <li class="swiper-slide">
                        <div class="product-block">
                            @if ($product->discount)
                            <span class="onsale bg-primary">
                                Sale!
                             </span>
                            @endif
                           <div class="image-wrap">
                              <a href="./shop/product-detail.html">
                                 <div class="product-image">
                                    <img src="{{ asset('product-images/' . $photo->photo) }}"  class="img-fluid w-100 photo" alt="productImg-01" loading="lazy" value="{{$photo->photo}}"/>
                                 </div>
                              </a>
                              <div class="buttons-holder" style="background: #68b7e2">
                                 <ul class="list-unstyled m-0 p-0">
                                    <li>
                                       <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup-{{ $product->id }}-{{ $photo->id }}">
                                          <i class="fa-solid fa-eye"></i>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                                    </li>
                                    <li>
                                       <a href="#" class="basket-card added_to_cart cart-btn d-flex align-items-center">
                                          <i class="fa-solid fa-basket-shopping"></i>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="product-caption">
                              <h5 class="product__title">
                                 <a href="./shop/product-detail.html" class="title-link" value="{{$product->title}}">{{$product->title}}</a>
                              </h5>
                              @if ($product->discount)
                              <div class="price-detail">
                                <div class="price" value="{{$product->discount}}"><del>{{$product->symbole}}{{$product->discount}}</del>{{$product->symbole}}{{$product->price}}</div>
                              </div>
                              @else
                              <div class="price-detail">
                                <div class="price" value="{{$product->price}}">{{$product->symbole}}{{$product->price}}</div>
                              </div>
                              @endif

                              <div class="container-rating">
                                 <div class="star-rating text-primary">
                                    <span>
                                       <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                       <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                       <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                       <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                    </span>
                                    <span>
                                       <i class="fa fa-star-half text-warning" aria-hidden="true"></i>
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                    @endforeach
                    @endforeach
                </ul>
                <div class="swiper-button swiper-button-next"></div>
                <div class="swiper-button swiper-button-prev"></div>
             </div>
          </div>
       </div>
    </div>
   @include('shop-modal')
 </div> --}}
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
