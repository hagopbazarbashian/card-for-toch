@extends('layout.app-shop')
@section('title'){{ 'Single Product' }}@endsection
@section('home')
<!-- Include Lightbox2 CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">

<!-- Include Lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

<style>
.containerr {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 2rem;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    font-size: 80%;
    font-weight: 700;
    padding: 0 20px;
    margin-bottom: 1rem;
}
.section-padding-top {
    padding: 0.25rem 0 0 0 !important;
}
.swiper {
    margin-bottom: 0.25rem !important;
}
</style>
<div class="section-padding-top product-detail">
   <div class="containerr">
      <div class="row">
         <div class="col-lg-6">
            <div class="product-tab-slider">
               <div class="swiper product-tab-slider-thumb" id="main-slider">
                  <div class="swiper-wrapper m-0">
                     <div class="swiper-slide p-0">
                        <a data-fslightbox="product" href="{{ asset('productimages/'.$newproductalls->photo) }}">
                           <img src="{{ asset('productimages/'.$newproductalls->photo) }}" class="img-fluid product-detail-image" alt="product-slide-image" />
                        </a>
                     </div>
                  </div>
               </div>
               <div class="swiper product-tab-slider-images" id="thumb-slider">
                  <div class="swiper product-tab-slider-images" id="thumb-slider">
                  <div class="swiper-wrapper m-0">
                     @foreach ($additinelphotos as $additinelphoto)
                           <div class="swiper-slide p-0">
                              <a href="{{ asset('additionphoto/' . $additinelphoto->photo) }}" data-lightbox="product-gallery">
                                 <img src="{{ asset('additionphoto/' . $additinelphoto->photo) }}" class="img-fluid" alt="product-slide-image">
                              </a>
                           </div>
                     @endforeach
                  </div>
               </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-5">
            <h3>{{ $newproductalls->title }}</h3>
            <div class="mt-2">
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
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
               </span>
            </div>
            <h4 class="price mt-3 mb-0">{{ $newproductalls->symbole }}{{ $newproductalls->price }}</h4>
            <h4 class="ms-2 sale-price mt-3 mb-0"></h4>
            <p class="mt-4 mb-0">{{ $newproductalls->description }}</p>
            <div class="add-product-wrapper mt-5 pb-5">
               <ul class="list-inline m-0 p-0 d-flex align-items-center gap-3 flex-wrap">
                  <li class="wish-list">
                     <a href="#" class="d-inline-block bg-soft-primary border border-white wishlist-btn">
                        <i class="far fa-heart"></i>
                     </a>
                  </li>
                  <li>
                     <div class="iq-button">
                        <a href="{{ route('checkout', $newproductalls->id) }}" class="btn btn-sm cart-btn text-uppercase position-relative">
                           <span class="button-text">Add to Cart</span>
                           <i class="fa-solid fa-play"></i>
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="related-product-block section-padding-top">
      <div class="container p-0">
         <div class="overflow-hidden">
            <div class="d-flex align-items-center justify-content-between px-3 my-4">
               <h5 class="main-title text-capitalize mb-0">Related Products</h5>
            </div>
            <div class="card-style-slider">
               <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="true" data-loop="true" data-navigation="true" data-pagination="true">
                  <ul class="p-0 swiper-wrapper m-0 list-inline">
                     @foreach ($newproductallsall as $cardalls)
                     <li class="swiper-slide">
                         <div class="product-block">
                            <div class="image-wrap">
                               <a href="{{ route('single_card', $cardalls->id) }}">
                                  <div class="product-image">
                                     <img src="{{ asset('productimages/' . $cardalls->photo) }}" class="img-fluid w-100" alt="productImg-01" loading="lazy" />
                                  </div>
                               </a>
                            </div>
                            <div class="product-caption">
                               <h5 class="product__title">
                                  <a href="{{ route('single_card', $cardalls->id) }}" class="title-link">{{ $cardalls->title }}</a>
                               </h5>
                               <div class="price-detail">
                                  <div class="price">{{ $cardalls->symbole }}{{ $cardalls->price }}</div>
                               </div>
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
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const thumbsSlider = new Swiper('#thumb-slider', {
            slidesPerView: 4,
            spaceBetween: 10,
            freeMode: true,
            watchSlidesProgress: true,
        });

        const mainSlider = new Swiper('#main-slider', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            thumbs: {
                swiper: thumbsSlider
            }
        });
    });
</script>
<!-- Include Lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    })
</script>
@endsection
