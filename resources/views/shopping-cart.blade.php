<div class="offcanvas offcanvas-end sidebar-cart border-0" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header py-4">
       <h5 class="offcanvas-title">Shopping Cart ({{$shopcardscount ?? ''}})</h5>
       <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body py-5">
       <div class="sidebar-cart-content d-flex flex-column justify-content-between">
          <div class="cart-items-container">
             <ul class="cart-items-list m-0 list-inline">
                @if (isset($shopcards))
                @foreach ($shopcards as $shopcard)
                <li class="cart-item mb-4 pb-4 border-bottom">
                   <div class="cart-item-block d-flex gap-3">
                      <div class="image flex-shrink-0">
                         <img src="{{ asset('product-images/'.$shopcard->photo) }}" width="90" alt="product-image" class="img-fluid object-cover" />
                      </div>
                      <div class="cart-block-content position-relative flex-grow-1 pe-5">
                         <h6 class="mb-36 text-capitalize">{{ $shopcard->title }}</h6>
                         <span class="small" style="color:#68b7e2" id="dynamicPrice">${{ $shopcard->price }}</span>
                         <div class="mt-3">
                            <div class="btn-group iq-qty-btn border border-white rounded-0" data-qty="btn" role="group">
                                <input type="hidden" class="product_id" value="{{$shopcard->id}}">
                               <button type="button" class="btn btn-sm btn-outline-light iq-quantity-minus text-white border-0">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="6" height="3" viewBox="0 0 6 3" fill="none">
                                     <path d="M5.22727 0.886364H0.136364V2.13636H5.22727V0.886364Z" fill="currentColor"></path>
                                  </svg>
                               </button>
                               <input type="text" class="btn btn-sm btn-outline-light input-display border-0"  pattern="^(0|[1-9][0-9]*)$" minlength="1" maxlength="10" value="{{ $shopcard->many }}" title="Qty" />
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
                @endforeach
                @endif
             </ul>
          </div>
          <div class="cart-progress-container mt-5 pt-5 border-top">
             <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                <h5 class="m-0 fw-bold">Subtotal</h5>
                <h5 class="m-0 fw-bold">${{ $total ?? '' }}</h5>
             </div>
             <div class="d-grid gap-3 mt-4">
                <a href="./shop/checkout.html" class="btn  text-uppercase fw-medium w-100 text-white" style="background-color:#68b7e2">
                   <span class="button-text small">checkout</span>
                </a>

                <a href="./shop/cart.html" class="btn bg-light text-uppercase fw-medium w-100 text-dark">
                   <span class="button-text small">view cart</span>
                </a>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--Nav End-->

 <!--bread-crumb-->
 <!--bread-crumb-->
