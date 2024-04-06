@foreach ($newproducts as $product)
@foreach ($product->photo as $photo)
    <!-- Modal inside the loop -->
    <div class="modal fade" id="woosq-popup-{{ $product->id }}-{{ $photo->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered positon-relative">
            <div class="modal-content rounded-0 border-0">
               <div class="modal-body p-0">
                  <button type="button" class="btn-close position-absolute end-0" data-bs-dismiss="modal" aria-label="Close"></button>
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <img src="{{ asset('product-images/' . $photo->photo) }}" class="object-cover" alt="shop-img" />
                     </div>
                     <div class="col-md-6">
                        <div class="entry-summary p-md-4">
                           <h3>{{$product->title}}</h3>
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
                           @if ($product->discount)
                           <h4 class="price text-white mt-3"><del class="text-body fw-normal me-1">{{$product->symbole}}{{$product->discount}}</del>{{$product->symbole}}{{$product->price}}</h4>
                            @else
                            <h4 class="price text-white mt-3">{{$product->symbole}}{{$product->price}}</h4>
                            @endif

                           <p>{{$product->description}}</p>
                           <ul class="list-inline m-0 p-0 d-flex align-items-center gap-3 flex-wrap pt-0 pt-md-4 pb-5">
                              <li>
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
                              </li>
                              <li>
                                 <div class="iq-button">
                                    <a href="#" class="btn btn-sm text-uppercase position-relative cart-btn">
                                       <span class="button-text">add to cart</span>
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
@endforeach
@endforeach
