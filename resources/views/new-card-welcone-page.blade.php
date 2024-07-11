<style>
    .col-xl-9{
     width:100% !important;
     }
     .g-4, .gx-4{
         margin: 50px !important;
     }
     @media (max-width: 767.98px) {
        .row-cols-1 > [class*='col-'] {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    
        .row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
    }
    </style>
<div class="col-xl-9">
    <div class="tab-content" id="pills-tabContent">
       <div class="tab-pane fade show active" id="pills-grid-three-view-tab" role="tabpanel" aria-labelledby="grid-three-view-tab">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
             @foreach($newproducts as $product)
             <div class="col">
                <div class="card product-block h-100">
                   @if($product->status === 'Sale')
                   <span class="badge bg-primary position-absolute top-0 end-0 m-2">Sale!</span>
                   @endif
                   <div class="image-wrap">
                      <a href="{{route('single_card',$product->id)}}">
                         <img src="{{ asset('productimages/' . $product->photo) }}" class="card-img-top img-fluid" alt="{{ $product->title }}" loading="lazy" />
                      </a>
                   </div>
                   <div class="card-body d-flex flex-column">
                      <h5 class="card-title product__title">
                         <a href="" class="title-link">
                            {{ $product->title }}
                         </a>
                      </h5>
                      <p class="card-text blog-desc">
                         {{ Str::limit($product->description, 100) }}
                      </p>
                      <div class="mt-auto">
                         <div class="price-detail mb-3">
                            <div class="price" style="font-size:24px !important;">
                               {{ $product->symbole }}{{ $product->price }}
                            </div>
                         </div>
                         <div class="container-rating mb-3">
                            <div class="star-rating text-primary">
                               <!-- Assuming you have a rating system, otherwise remove this -->
                               <span><i class="fa fa-star text-warning" aria-hidden="true"></i></span>
                               <span><i class="fa fa-star text-warning" aria-hidden="true"></i></span>
                               <span><i class="fa fa-star text-warning" aria-hidden="true"></i></span>
                               <span><i class="fa fa-star text-warning" aria-hidden="true"></i></span>
                               <span><i class="fa fa-star-half text-warning" aria-hidden="true"></i></span>
                            </div>
                         </div>
                         <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('single_card',$product->id)}}" class="btn btn-sm btn-primary">
                               <span class="button-text">Add to cart</span>
                               <i class="fa-solid fa-play ms-2"></i>
                            </a>
                            <a href="{{route('add_favorit_list',$product->id)}}" class="btn btn-outline-secondary add_to_wishlist wishlist-btn">
                               <i class="far fa-heart"></i>
                            </a>
                            <a href="{{route('single_card',$product->id)}}" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#woosq-popup">
                               <i class="fa-solid fa-eye"></i>
                            </a>
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
 