@extends('layout.app-shop') 
@section('title'){{ 'Category Page'}}@endsection 
@section('home')
<style>
   .product-block .image-wrap .buttons-holder{
      background:#68b7e2 !important;
   }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
<!-- ==================
    Cart Sidebar
========================= -->
<div class="offcanvas offcanvas-end sidebar-cart border-0" tabindex="-1" id="offcanvasCart">
   <div class="offcanvas-header py-4">
      <h5 class="offcanvas-title">Shopping Cart (3)</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
   </div>
   <div class="offcanvas-body py-5">
      <div class="sidebar-cart-content d-flex flex-column justify-content-between">
         <div class="cart-items-container">
            <ul class="cart-items-list m-0 list-inline">
               <li class="cart-item mb-4 pb-4 border-bottom">
                  <div class="cart-item-block d-flex gap-3">
                     <div class="image flex-shrink-0">
                        <img src="../assets/images/shop/product/02.webp" width="90" alt="product-image" class="img-fluid object-cover" />
                     </div>
                     <div class="cart-block-content position-relative flex-grow-1 pe-5">
                        <h6 class="mb-36 text-capitalize">Believe Mask</h6>
                        <span class="text-primary small">$13.00</span>
                        <div class="mt-3">
                           <div class="btn-group iq-qty-btn border border-white rounded-0" data-qty="btn" role="group">
                              <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                              <input type="text" class="btn btn-sm btn-outline-light input-display border-0" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" />
                              <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                    <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="position-absolute top-0 end-0">
                           <a href="javascript:void();" class="text-white delete-btn text-capitalize">delete</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="cart-item mb-4 pb-4 border-bottom">
                  <div class="cart-item-block d-flex gap-3">
                     <div class="image flex-shrink-0">
                        <img src="../assets/images/shop/product/04.webp" width="90" alt="product-image" class="img-fluid object-cover" />
                     </div>
                     <div class="cart-block-content position-relative flex-grow-1 pe-5">
                        <h6 class="mb-36 text-capitalize">Black Cap</h6>
                        <span class="text-primary small">$18.00</span>
                        <div class="mt-3">
                           <div class="btn-group iq-qty-btn border border-white rounded-0" data-qty="btn" role="group">
                              <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                              <input type="text" class="btn btn-sm btn-outline-light input-display border-0" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" />
                              <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                    <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="position-absolute top-0 end-0">
                           <a href="javascript:void();" class="text-white delete-btn text-capitalize">delete</a>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="cart-item">
                  <div class="cart-item-block d-flex gap-3">
                     <div class="image flex-shrink-0">
                        <img src="../assets/images/shop/product/05.webp" width="90" alt="product-image" class="img-fluid object-cover" />
                     </div>
                     <div class="cart-block-content position-relative flex-grow-1 pe-5">
                        <h6 class="mb-36 text-capitalize">Boxing Gloves</h6>
                        <span class="text-primary small">$18.00</span>
                        <div class="mt-3">
                           <div class="btn-group iq-qty-btn border border-white rounded-0" data-qty="btn" role="group">
                              <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                              <input type="text" class="btn btn-sm btn-outline-light input-display border-0" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" />
                              <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                    <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="position-absolute top-0 end-0">
                           <a href="javascript:void();" class="text-white delete-btn text-capitalize">delete</a>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <div class="cart-progress-container mt-5 pt-5 border-top">
            <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
               <h5 class="m-0 fw-bold">Subtotal</h5>
               <h5 class="m-0 fw-bold">$49.00</h5>
            </div>
            <div class="d-grid gap-3 mt-4">
               <a href="../shop/checkout.html" class="btn bg-primary text-uppercase fw-medium w-100 text-white">
                  <span class="button-text small">checkout</span>
               </a>

               <a href="../shop/cart.html" class="btn bg-light text-uppercase fw-medium w-100 text-dark">
                  <span class="button-text small">view cart</span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Nav End-->
<!--bread-crumb-->
<div class="iq-breadcrumb" style="background-image: url(https://v1ce.co/cdn/shop/collections/Lifestyle_image.jpg?v=1683643684&width=1800);">
    <div class="container-fluid">
       <div class="row align-items-center">
             <div class="col-sm-12">
                 <nav aria-label="breadcrumb" class="text-view-all-product">
                     <h2 class="title">Category</h2>
                     <h2 class="title">Cards</h2>
                     <ol class="breadcrumb justify-content-left">
                         <li class="breadcrumb-item"><a class="home" href="{{route('shop_page')}}">Home</a></li>
                         <li class="breadcrumb-item">Category</li>
                     </ol>
                 </nav>
             </div>
         </div>
    </div>
 </div>
<!--bread-crumb-->
<div class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-xl-3">
            <div class="pe-3">

              
                <div class="shop-box">
                    <h5 class="">PRICE FILTER</h5>
                    <div class="form-group my-4 product-range">
                        <div class="range-slider" id="product-price-range"></div>
                    </div>
                    <div class="d-flex align-items-center my-3">
                        <small>Price: &nbsp;</small>
                        <small id="lower-value">&nbsp;$11</small>
                        <small id="lower-value1">&nbsp; - &nbsp;</small>
                        <small id="upper-value">&nbsp;$50</small>
                    </div>
                </div>
            </div>
         </div>


         <div class="col-xl-9">
            <div class="d-flex align-items-center justify-content-between mb-5 shop-filter flex-wrap">
                {{-- <p>Showing {{ $newproduc_with_categorys->count() }} of {{ $newproduc_with_categorys->total() }} results</p> --}}
                <div class="d-flex align-items-center">
                    <div class="product-view-button">
                        <ul class="nav_shop nav d-flex nav-pills mb-0 iq-product-filter d-flex bg-transparent align-items-center list-inline" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn-sm btn-icon rounded-pill p-0" id="list-view-tab" data-bs-toggle="pill" data-bs-target="#pills-list-view" type="button" role="tab" aria-controls="pills-list-view" aria-selected="true">
                                    <span class="btn-inner">
                                        <svg class="hover_effect active_effect" width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1379_355)">
                                                <path d="M3.42857 0H0V3.42857H3.42857V0Z" fill=""></path>
                                                <path d="M18 0.857422H6V2.57171H18V0.857422Z" fill=""></path>
                                                <path d="M3.42857 6H0V9.42857H3.42857V6Z" fill=""></path>
                                                <path d="M18 6.85742H6V8.57171H18V6.85742Z" fill=""></path>
                                                <path d="M3.42857 12H0V15.4286H3.42857V12Z" fill=""></path>
                                                <path d="M18 12.8574H6V14.5717H18V12.8574Z" fill=""></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1379_355">
                                                    <rect width="18" height="15.4286" fill=""></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn-sm btn-icon rounded-pill p-0" id="grid-view-tab" data-bs-toggle="pill" data-bs-target="#pills-grid-view" type="button" role="tab" aria-controls="pills-grid-view" aria-selected="false">
                                    <span class="btn-inner">
                                        <svg class="hover_effect active_effect" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.57143 0H0V8.57143H8.57143V0Z" fill=""></path>
                                            <path d="M17.9999 0H9.42847V8.57143H17.9999V0Z" fill=""></path>
                                            <path d="M8.57143 9.42871H0V18.0001H8.57143V9.42871Z" fill=""></path>
                                            <path d="M17.9999 9.42871H9.42847V18.0001H17.9999V9.42871Z" fill=""></path>
                                        </svg>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn-sm btn-icon rounded-pill p-0 active" id="grid-three-view-tab" data-bs-toggle="pill" data-bs-target="#pills-grid-three-view-tab" type="button" role="tab" aria-controls="pills-grid-three-view-tab" aria-selected="false">
                                    <span class="btn-inner">
                                        <svg class="hover_effect active_effect" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.90909 0H0V4.90909H4.90909V0Z" fill=""></path>
                                            <path d="M11.4545 0H6.54541V4.90909H11.4545V0Z" fill=""></path>
                                            <path d="M17.9999 0H13.0908V4.90909H17.9999V0Z" fill=""></path>
                                            <path d="M4.90909 6.5459H0V11.455H4.90909V6.5459Z" fill=""></path>
                                            <path d="M11.4545 6.5459H6.54541V11.455H11.4545V6.5459Z" fill=""></path>
                                            <path d="M17.9999 6.5459H13.0908V11.455H17.9999V6.5459Z" fill=""></path>
                                            <path d="M4.90909 13.0908H0V17.9999H4.90909V13.0908Z" fill=""></path>
                                            <path d="M11.4545 13.0908H6.54541V17.9999H11.4545V13.0908Z" fill=""></path>
                                            <path d="M17.9999 13.0908H13.0908V17.9999H17.9999V13.0908Z" fill=""></path>
                                        </svg>
                                    </span>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link btn-sm btn-icon rounded-pill p-0" id="grid-three-four-tab" data-bs-toggle="pill" data-bs-target="#pills-grid-three-four-view-tab" type="button" role="tab" aria-controls="pills-grid-three-four-view-tab" aria-selected="false">
                                    <span class="btn-inner">
                                        <svg class="hover_effect active_effect" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3.85714 0H0V3.85714H3.85714V0Z" fill=""></path>
                                            <path d="M8.5715 0H4.71436V3.85714H8.5715V0Z" fill=""></path>
                                            <path d="M13.2856 0H9.42847V3.85714H13.2856V0Z" fill=""></path>
                                            <path d="M18 0H14.1428V3.85714H18V0Z" fill=""></path>
                                            <path d="M3.85714 4.71387H0V8.57101H3.85714V4.71387Z" fill=""></path>
                                            <path d="M8.5715 4.71387H4.71436V8.57101H8.5715V4.71387Z" fill=""></path>
                                            <path d="M13.2856 4.71387H9.42847V8.57101H13.2856V4.71387Z" fill=""></path>
                                            <path d="M18 4.71387H14.1428V8.57101H18V4.71387Z" fill=""></path>
                                            <path d="M3.85714 9.42871H0V13.2859H3.85714V9.42871Z" fill=""></path>
                                            <path d="M8.5715 9.42871H4.71436V13.2859H8.5715V9.42871Z" fill=""></path>
                                            <path d="M13.2856 9.42871H9.42847V13.2859H13.2856V9.42871Z" fill=""></path>
                                            <path d="M18 9.42871H14.1428V13.2859H18V9.42871Z" fill=""></path>
                                            <path d="M3.85714 14.1426H0V17.9997H3.85714V14.1426Z" fill=""></path>
                                            <path d="M8.5715 14.1426H4.71436V17.9997H8.5715V14.1426Z" fill=""></path>
                                            <path d="M13.2856 14.1426H9.42847V17.9997H13.2856V14.1426Z" fill=""></path>
                                            <path d="M18 14.1426H14.1428V17.9997H18V14.1426Z" fill=""></path>
                                        </svg>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="iq-custom-select d-inline-block shop-select">
                        <select name="cars" class="form-control season-select select2-basic-single js-states">
                            <option value="season1">Default sorting</option>
                            <option>Sort by popularity</option>
                            <option>Sort by average rating</option>
                            <option>Sort by latest</option>
                            <option>Sort by price: low to high</option>
                            <option>Sort by price: high to low</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-list-view" role="tabpanel" aria-labelledby="list-view-tab">
                    <div class="row row-cols-1">
                        @foreach ($newproduc_with_categorys as $product)
                            <div class="col">
                                <div class="product-block product-list">
                                    <div class="row">
                                        <div class="col-md-4 ps-0">
                                            {{-- <span class="onsale bg-primary">
                                                Sale!
                                            </span> --}}
                                            <div class="image-wrap">
                                                <a href="../shop/product-detail.html">
                                                    <div class="product-image">
                                                        <img src="{{ asset('productimages/' . $product->photo) }}" class="img-fluid w-100" alt="productImg-" loading="lazy" />
                                                    </div>
                                                </a>
                                                <div class="buttons-holder">
                                                    <ul class="list-unstyled m-0 p-0">
                                                        <li>
                                                            <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="product-caption">
                                                <h5 class="product__title">
                                                    <a href="shop/product-detail.html" class="title-link">{{ $product->title }}</a>
                                                </h5>
                                                <div class="price-detail">
                                                    <div class="price"><del>{{ $product->old_price }}</del>{{ $product->new_price }}</div>
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
                                                            <i class="fa fa-star text-warning" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <ul class="iq-button-holder list-inline d-flex flex-wrap gap-3">
                                                    <li>
                                                        <div class="iq-button">
                                                            <a href="#" class="btn btn-sm cart-btn text-uppercase position-relative">
                                                                <span class="button-text">add to cart</span>
                                                                <i class="fa-solid fa-play"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="add_to_wishlist wishlist-btn"><i class="far fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                                <p class="blog-desc line-count-2">
                                                    {{ $product->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
                        @foreach ($newproduc_with_categorys as $product)
                            <div class="col">
                                <div class="product-block">
                                    {{-- <span class="onsale bg-primary">
                                        Sale!
                                    </span> --}}
                                    <div class="image-wrap">
                                        <a href="../shop/product-detail.html">
                                            <div class="product-image">
                                                <img src="{{ asset('productimages/' . $product->photo) }}" class="img-fluid w-100" alt="productImg-" loading="lazy" />
                                            </div>
                                        </a>
                                        <div class="buttons-holder">
                                            <ul class="list-unstyled m-0 p-0">
                                                <li>
                                                    <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                                        <i class="fa-solid fa-basket-shopping"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <h5 class="product__title">
                                            <a href="../shop/product-detail.html" class="title-link">{{ $product->title }}</a>
                                        </h5>
                                        <div class="price-detail">
                                            <div class="price"><del>{{ $product->old_price }}</del>{{ $product->new_price }}</div>
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
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade show active" id="pills-grid-three-view-tab" role="tabpanel" aria-labelledby="grid-three-view-tab">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @foreach ($newproduc_with_categorys as $product)
                            <div class="col">
                                <div class="product-block">
                                    {{-- <span class="onsale bg-primary">
                                        Sale!
                                    </span> --}}
                                    <div class="image-wrap">
                                        <a href="../shop/product-detail.html">
                                            <div class="product-image">
                                                <img src="{{ asset('productimages/' . $product->photo) }}" class="img-fluid w-100" alt="productImg-" loading="lazy" />
                                            </div>
                                        </a>
                                        <div class="buttons-holder">
                                            <ul class="list-unstyled m-0 p-0">
                                                <li>
                                                    <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                                        <i class="fa-solid fa-basket-shopping"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <h5 class="product__title">
                                            <a href="../shop/product-detail.html" class="title-link">{{ $product->title }}</a>
                                        </h5>
                                        <div class="price-detail">
                                            <div class="price"><del>{{ $product->old_price }}</del>{{ $product->new_price }}</div>
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
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-grid-three-four-view-tab" role="tabpanel">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                        @foreach ($newproduc_with_categorys as $product)
                            <div class="col">
                                <div class="product-block">
                                    {{-- <span class="onsale bg-primary">
                                        Sale!
                                    </span> --}}
                                    <div class="image-wrap">
                                        <a href="../shop/product-detail.html">
                                            <div class="product-image">
                                                <img src="{{ asset('productimages/' . $product->photo) }}" class="img-fluid w-100" alt="productImg-" loading="lazy" />
                                            </div>
                                        </a>
                                        <div class="buttons-holder" >
                                            <ul class="list-unstyled m-0 p-0" >
                                                <li>
                                                    <a class="cursor-pointer" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                                                        <i class="fa-solid fa-eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="add_to_wishlist wishlist-btn"><i class="fa-solid fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" class="added_to_cart cart-btn d-flex align-items-center">
                                                        <i class="fa-solid fa-basket-shopping"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <h5 class="product__title">
                                            <a href="../shop/product-detail.html" class="title-link">{{ $product->title }}</a>
                                        </h5>
                                        <div class="price-detail">
                                            <div class="price"><del>{{ $product->old_price }}</del>{{ $product->new_price }}</div>
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
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
      </div>
   </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var slider = document.getElementById('product-price-range');
    
        noUiSlider.create(slider, {
            start: [11, 50],
            connect: true,
            range: {
                'min': 0,
                'max': 100
            },
            tooltips: [true, true],
            format: {
                to: function (value) {
                    return '$' + value.toFixed(0);
                },
                from: function (value) {
                    return Number(value.replace('$', ''));
                }
            }
        });
    
        var lowerValue = document.getElementById('lower-value');
        var upperValue = document.getElementById('upper-value');
    
        slider.noUiSlider.on('update', function (values, handle) {
            if (handle === 0) {
                lowerValue.innerHTML = values[handle];
            } else {
                upperValue.innerHTML = values[handle];
            }
        });
    });
    </script>
@endsection