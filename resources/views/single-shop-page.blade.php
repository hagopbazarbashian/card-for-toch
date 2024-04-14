@extends('layout.app-shop')
@section('title'){{ 'Single Product' }}@endsection
@section('home')
<style>
    .nm{
        padding:unset !important;
    }
</style>
<div class="section-padding-top product-detail">
    <div class="container">
       <div class="row">
          <div class="col-lg-6">
             <div class="product-tab-slider">
                <div class="swiper product-tab-slider-thumb" data-swiper="slider-prodcut-images">
                   <div class="swiper-wrapper m-0">
                    @foreach ($newproduct->photo as $photo)
                    <div class="swiper-slide p-0">
                        <a data-fslightbox="product" href="{{ asset('product-images/' . $photo->photo) }}">
                            <img src="{{ asset('product-images/' . $photo->photo) }}" class="img-fluid product-detail-image"
                                alt="product-slide-image" />
                        </a>
                    </div>
                    @endforeach
                   </div>
                </div>
                <div class="swiper product-tab-slider-images" data-swiper="slider-thumbs-product">
                   <div class="swiper-wrapper m-0">
                    @foreach ($newproduct->photo as $photo)
                      <div class="swiper-slide p-0">
                         <img src="{{ asset('product-images/' . $photo->photo) }}" class="img-fluid" alt="product-slide-image" />
                      </div>
                    @endforeach
                   </div>
                </div>
             </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-5">
             <h3>{{$newproduct->title}}</h3>
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
             <h4 class="price mt-3 mb-0">{{$newproduct->symbole}}{{$newproduct->discount == null ?  : $newproduct->price}}</h4>
             <h4 class="ms-2 sale-price mt-3 mb-0"></h4>
             <p class="mt-4 mb-0">{{$newproduct->description}}</p>
             <div class="add-product-wrapper mt-5 pb-5">
                <ul class="list-inline m-0 p-0 d-flex align-items-center gap-3 flex-wrap">
                   <li>
                      <div class="btn-group iq-qty-btn border border-white rounded-0" data-qty="btn" role="group">
                         <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus text-white border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                               <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                            </svg>
                         </button>
                         <input type="text" class="btn nm btn-sm btn-outline-light input-display border-0" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2" title="Qty" />
                         <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus text-white border-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                               <path d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z" fill="currentColor"></path>
                            </svg>
                         </button>
                      </div>
                   </li>
                   <li class="wish-list">
                      <a href="#" class="d-inline-block bg-soft-primary border border-white wishlist-btn">
                         <i class="far fa-heart"></i>
                      </a>
                   </li>
                   <li>
                      <div class="iq-button">
                         <a href="#" class="btn btn-sm cart-btn text-uppercase position-relative">
                            <span class="button-text">Add to Cart</span>
                            <i class="fa-solid fa-play"></i>
                         </a>
                      </div>
                   </li>
                </ul>
             </div>
             {{-- <div class="product-meta-wrapper">
                <ul class="list-inline m-0 p-0">
                   <li class="mb-2">
                      <span class="text-white fw-semibold">SKU :</span>
                      <h6 class="d-inline"style="color:#68b7e2">Bag Pack</h6>
                   </li>
                   <li class="mb-2">
                      <span class="text-white fw-semibold">Categories :</span>
                      <h6 class="d-inline" style="color:#68b7e2">Uptight Birds</h6>
                   </li>
                   <li>
                      <span class="text-white fw-semibold">Tag :</span>
                      <h6 class="d-inline" style="color:#68b7e2">Costume, Lighting</h6>
                   </li>
                </ul>
             </div> --}}
          </div>
       </div>
    </div>

    <div class="related-product-block section-padding-top">
       <div class="container p-0">
          <div class="overflow-hidden">
             <div class="d-flex align-items-center justify-content-between px-3 my-4">
                <h5 class="main-title text-capitalize mb-0">Related Products</h5>
                <a href="shop/view-all-product.html" class="text-primary iq-view-all text-decoration-none flex-none">Want More?</a>
             </div>
             <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="true" data-loop="true" data-navigation="true" data-pagination="true">
                   <ul class="p-0 swiper-wrapper m-0 list-inline">
                      <li class="swiper-slide">
                         <div class="product-block">
                            <span class="onsale bg-primary">
                               Sale!
                            </span>
                            <div class="image-wrap">
                               <a href="../shop/product-detail.html">
                                  <div class="product-image">
                                     <img src="../assets/images/shop/product/01.webp" class="img-fluid w-100" alt="productImg-01" loading="lazy" />
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
                                  <a href="../shop/product-detail.html" class="title-link"> Black Bow</a>
                               </h5>
                               <div class="price-detail">
                                  <div class="price"><del>$48.00</del>$28.00</div>
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
                      <li class="swiper-slide">
                         <div class="product-block">
                            <div class="image-wrap">
                               <a href="../shop/product-detail.html">
                                  <div class="product-image">
                                     <img src="../assets/images/shop/product/02.webp" class="img-fluid w-100" alt="productImg-02" loading="lazy" />
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
                                  <a href="../shop/product-detail.html" class="title-link"> Believe Mask</a>
                               </h5>
                               <div class="price-detail">
                                  <div class="price"><del></del>$13.00</div>
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
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide">
                         <div class="product-block">
                            <span class="onsale bg-primary">
                               Sale!
                            </span>
                            <div class="image-wrap">
                               <a href="../shop/product-detail.html">
                                  <div class="product-image">
                                     <img src="../assets/images/shop/product/03.webp" class="img-fluid w-100" alt="productImg-03" loading="lazy" />
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
                                  <a href="../shop/product-detail.html" class="title-link"> Black Bow</a>
                               </h5>
                               <div class="price-detail">
                                  <div class="price"><del></del>$18.00 - $45.00</div>
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
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide">
                         <div class="product-block">
                            <span class="onsale bg-primary">
                               New!
                            </span>
                            <div class="image-wrap">
                               <a href="../shop/product-detail.html">
                                  <div class="product-image">
                                     <img src="../assets/images/shop/product/04.webp" class="img-fluid w-100" alt="productImg-04" loading="lazy" />
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
                                  <a href="../shop/product-detail.html" class="title-link"> Black Cap</a>
                               </h5>
                               <div class="price-detail">
                                  <div class="price"><del>$20.00</del>$18.00</div>
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
                            </div>
                         </div>
                      </li>
                      <li class="swiper-slide">
                         <div class="product-block">
                            <div class="image-wrap">
                               <a href="../shop/product-detail.html">
                                  <div class="product-image">
                                     <img src="../assets/images/shop/product/05.webp" class="img-fluid w-100" alt="productImg-05" loading="lazy" />
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
                                  <a href="../shop/product-detail.html" class="title-link"> Boxing Gloves</a>
                               </h5>
                               <div class="price-detail">
                                  <div class="price"><del>$20.00</del>$18.00</div>
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
                            </div>
                         </div>
                      </li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="modal fade" id="woosq-popup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered positon-relative">
       <div class="modal-content rounded-0 border-0">
          <div class="modal-body p-0">
             <button type="button" class="btn-close position-absolute end-0" data-bs-dismiss="modal" aria-label="Close"></button>
             <div class="row align-items-center">
                <div class="col-md-6">
                   <img src="../assets/images/shop/product/01.webp" class="object-cover" alt="shop-img" />
                </div>
                <div class="col-md-6">
                   <div class="entry-summary p-md-4">
                      <h3>Bag Pack</h3>
                      <div class="review">
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
                      <h4 class="price text-white mt-3"><del class="text-body fw-normal me-1">$48.00</del>$28.00</h4>
                      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.</p>
                      <ul class="list-inline m-0 p-0 d-flex align-items-center gap-3 flex-wrap">
                        <li>
                           <div class="btn-group iq-qty-btn border border-white rounded-0" data-qty="btn" role="group">
                              <button type="button"
                                 class="btn btn-sm btn-outline-light iq-quantity-minus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                    <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                 </svg>
                              </button>
                              <input type="text" class="btn btn-sm btn-outline-light input-display border-0"
                                 data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="2"
                                 title="Qty">
                              <button type="button" class="btn btn-sm btn-outline-light iq-quantity-plus text-white border-0">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8" fill="none">
                                    <path
                                       d="M3.63636 7.70455H4.90909V4.59091H8.02273V3.31818H4.90909V0.204545H3.63636V3.31818H0.522727V4.59091H3.63636V7.70455Z"
                                       fill="currentColor"></path>
                                 </svg>
                              </button>
                           </div>
                        </li>
                        <li class="wish-list">
                           <a href="#" class="d-inline-block bg-soft-primary border border-white wishlist-btn">
                              <i class="far fa-heart"></i>
                           </a>
                        </li>
                        <li>
                           <div class="iq-button">
                              <a href="#" class="btn btn-sm cart-btn text-uppercase position-relative">
                                 <span class="button-text">Add to Cart</span>
                                 <i class="fa-solid fa-play"></i>
                              </a>
                           </div>
                        </li>
                     </ul>
                      <div class="d-flex align-items-center gap-2">
                         <span class="fw-semibold text-white">SKU :</span>
                         <span>Bag Pack</span>
                      </div>
                      <div class="d-flex align-items-center gap-2">
                         <span class="fw-semibold text-white">Category :</span>
                         <span class="text-primary">Uptight Birds</span>
                      </div>
                      <div class="d-flex align-items-center gap-2">
                         <span class="fw-semibold text-white">Tags :</span>
                         <span class="text-primary">Costume,</span>
                         <span class="text-primary">Lighting</span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
