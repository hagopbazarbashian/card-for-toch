@extends('layout.app-shop')
@section('title'){{ 'Single Product' }}@endsection
@section('home')
<style>
    .nm{
        padding:unset !important;
    }
    .btn{
        margin-top:0 !important;
    }
    /* .iq-custom-tab.nav-pills .nav-item .nav-link.active{
        :#68b7e2 !important;
    } */
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
                         <input type="text" class="btn nm btn-sm btn-outline-light input-display border-0" data-qty="input" pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="2" value="1" title="Qty" />
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
             <div class="product-meta-wrapper">
                <ul class="list-inline m-0 p-0">
                    @if ($newproduct->color_id)
                    @php
                    $colors = json_decode($newproduct->color_id);
                    @endphp

                   <li class="mb-2">
                    <span class="text-white fw-semibold">Color:</span>

                    @if(is_array($colors))
                    @foreach ($colors as $color)
                    <h6 class="d-inline"style="color:#68b7e2"><span style="display:inline-block; width:30px; height:30px; border-radius:50%;margin: 10px;position: relative;top: 18px;;background-color:{{ $color }};"></span></h6>
                    @endforeach
                    @endif

                   </li>
                    @endif
                   <li>
                      <span class="text-white fw-semibold">Tag :</span>
                      <h6 class="d-inline" style="color:#68b7e2">Costume, Lighting</h6>
                   </li>
                </ul>
             </div>
          </div>
       </div>
    </div>

    <div class="section-padding-top px-0">
        <div class="product-detail-tabs">
           <ul class="list-inline nav nav-pills justify-content-center iq-custom-tab tab-bg-gredient-center flex-md-row flex-column gap-md-5 gap-3 mb-5" id="product-tab" role="tablist">
              <li class="nav-item" role="presentation">
                 <a href="javascript:void(0)" class="nav-link active bg-transparent" data-bs-toggle="tab" data-bs-target="#description" role="tab" aria-selected="true">Description</a>
              </li>
              <li class="nav-item" role="presentation">
                 <a href="javascript:void(0)" class="nav-link bg-transparent" data-bs-toggle="tab" data-bs-target="#additional-information" role="tab" aria-selected="false">Additional information</a>
              </li>
              <li class="nav-item" role="presentation">
                 <a href="javascript:void(0)" class="nav-link bg-transparent" data-bs-toggle="tab" data-bs-target="#reviews" role="tab" aria-selected="false">Reviews</a>
              </li>
           </ul>
           <div class="tab-content" id="product-tab-content">
              <div class="tab-pane fade show active" id="description" role="tabpanel">
                 <p class="m-0">
                    {{$newproduct->description}}
                 </p>
              </div>
              <div class="tab-pane fade" id="additional-information" role="tabpanel">
                 <div class="table-responsive additional-info-table">
                    <table class="table table-border">
                       <tbody>
                          <tr class="text-body">
                             <th class="text-white">Color</th>
                             <td>Blue, Green, Red</td>
                          </tr>
                          <tr class="text-body">
                             <th class="text-white">Size</th>
                             <td>L, M, S</td>
                          </tr>
                          <tr class="text-body">
                             <th class="text-white">Weight</th>
                             <td>50ml, 100ml</td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
              </div>
              <div class="tab-pane fade" id="reviews" role="tabpanel">
                 <h4 class="mb-4">Reviews For Believe Mask</h4>
                 <div class="product-review-list">
                    <ul class="list-inline m-0 p-0">
                       <li class="pb-5 mb-5 border-bottom">
                          <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-start gap-4">
                             <div class="user-image flex-shrink-0">
                                <img src="../assets/images/shop/avatar.webp" alt="user-image" class="img-fluid" />
                             </div>
                             <div class="about-user">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                   <h5 class="mb-0">Jack Stark</h5>
                                   <span class="text-uppercase fst-italic fw-semibold published-date"> <i class="fas fa-minus fa-xs"></i> march 2, 2022</span>
                                   <div class="lh-1 ratting">
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
                                <p class="mt-2 mb-0">
                                   There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
                                </p>
                             </div>
                          </div>
                       </li>
                       <li class="mb-5">
                          <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-start gap-4">
                             <div class="user-image flex-shrink-0">
                                <img src="../assets/images/shop/avatar.webp" alt="user-image" class="img-fluid" />
                             </div>
                             <div class="about-user">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                   <h5 class="mb-0">Jhon Deo</h5>
                                   <span class="text-uppercase fst-italic fw-semibold published-date"> <i class="fas fa-minus fa-xs"></i> march 2, 2022</span>
                                   <div class="lh-1 ratting">
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
                                <p class="mt-2 mb-0">
                                   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                </p>
                             </div>
                          </div>
                       </li>
                    </ul>
                 </div>
                 <div class="mt-5 review-form">
                    <h4>Add a review</h4>
                    <p class="mb-5">Your email address will not be published. Required fields are marked *</p>
                    <p class="mb-2">Your rating *</p>
                    <form class="needs-validation" novalidate>
                       <div class="ratting">
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
                       <div class="mb-5 mt-4">
                          <label class="form-label">Your review *</label>
                          <textarea class="form-control rounded-0" required></textarea>
                       </div>
                       <div class="mb-5">
                          <label class="form-label">Name*</label>
                          <input type="text" class="form-control rounded-0" required />
                       </div>
                       <div class="mb-5">
                          <label class="form-label">Email*</label>
                          <input type="email" class="form-control rounded-0" required />
                       </div>
                       <div class="mb-5 form-check">
                          <input type="checkbox" class="form-check-input rounded-0" id="exampleCheck1" required />
                          <label class="form-check-label" for="exampleCheck1">Save my name, email, and website in this browser for the next time I comment.</label>
                       </div>
                       <div class="iq-button">
                          <a href="javascript:void(0);" class="btn text-uppercase position-relative">
                             <span class="button-text">submit</span>
                             <i class="fa-solid fa-play"></i>
                          </a>
                       </div>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </div>

    <div class="related-product-block section-padding-top">
       <div class="container p-0">
          <div class="overflow-hidden">
             <div class="d-flex align-items-center justify-content-between px-3 my-4">
                <h5 class="main-title text-capitalize mb-0">Related Products</h5>
                <a href="shop/view-all-product.html" class="iq-view-all text-decoration-none flex-none" style="color:#68b7e2" >Want More?</a>
             </div>
             <div class="card-style-slider">
                <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="3" data-mobile="2" data-mobile-sm="2" data-autoplay="true" data-loop="true" data-navigation="true" data-pagination="true">
                   <ul class="p-0 swiper-wrapper m-0 list-inline">
                    @foreach ($newproductalls as $newproductall)
                    <li class="swiper-slide">
                        <div class="product-block">
                            @if ($newproductall->discount)
                            <span class="onsale" style="background-color:#68b7e2">
                                Sale!
                            </span>
                            @endif
                           @foreach ($newproductall->photo->take(1) as $photo)
                           <div class="image-wrap">
                               <a href="#">
                                <div class="product-image">
                                    <img src="{{ asset('product-images/' . $photo->photo) }}" class="img-fluid w-100" alt="productImg-01" loading="lazy" />
                                   </div>
                                </a>
                           </div>
                           @endforeach
                           <div class="product-caption">
                              <h5 class="product__title">
                                 <a href="#" class="title-link"> {{$newproductall->title}}</a>
                              </h5>
                              <div class="price-detail">
                                 <div class="price">
                                    {!! $newproductall->discount ? '<del>' . $newproductall->symbole . $newproductall->discount . '</del>' . $newproductall->symbole . $newproductall->price : $newproductall->symbole . $newproductall->price !!}
                                 </div>
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
@endsection
