@extends('layout.app-shop') 
@section('title'){{ 'Category Page'}}@endsection 
@section('home')
<style>
   .product-block .image-wrap .buttons-holder {
      background: #68b7e2 !important;
   }
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

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
                     <small id="lower-value">&nbsp;5000 AMD</small>
                     <small id="lower-value1">&nbsp; - &nbsp;</small>
                     <small id="upper-value">&nbsp;25000 AMD</small>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-9">
            <div class="d-flex align-items-center justify-content-between mb-5 shop-filter flex-wrap">
               <!-- Filter options -->
            </div>
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade show active" id="pills-grid-three-view-tab" role="tabpanel" aria-labelledby="grid-three-view-tab">
                  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" id="product-list">
                     @foreach ($newproduc_with_categorys as $product)
                     <div class="col">
                        <div class="product-block" data-price="{{ $product->price }}">
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
                                 <div class="price"><del>{{ $product->old_price }}</del>{{ $product->price }}</div>
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
        start: [5000, 25000],
        connect: true,
        range: {
            'min': 0,
            'max': 50000
        },
        tooltips: [true, true],
        format: {
            to: function (value) {
                return value.toFixed(0) + ' AMD';
            },
            from: function (value) {
                return Number(value.replace(' AMD', ''));
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

        // Fetch products based on price range
        fetchFilteredProducts(values[0], values[1]);
    });

    // Initialize the product list
    fetchFilteredProducts(5000, 25000);
});

function fetchFilteredProducts(minPrice, maxPrice) {
    $.ajax({
        url: "{{ route('filter.products') }}",
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            minPrice: minPrice.replace(' AMD', ''),
            maxPrice: maxPrice.replace(' AMD', '')
        },
        success: function (response) {
            $('#product-list').empty();
            if(response.length > 0) {
                response.forEach(product => {
                    $('#product-list').append(`
                        <div class="col">
                            <div class="product-block" data-price="${product.price}">
                                <div class="image-wrap">
                                    <a href="../shop/product-detail.html">
                                        <div class="product-image">
                                            <img src="../productimages/${product.photo}" class="img-fluid w-100" alt="productImg-" loading="lazy" />
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
                                        <a href="../shop/product-detail.html" class="title-link">${product.title}</a>
                                    </h5>
                                    <div class="price-detail">
                                        <div class="price"><del>${product.old_price}</del>${product.price}</div>
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
                    `);
                });
            } else {
                $('#product-list').append('<p>No products found in this price range.</p>');
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error: ' + status + error);
        }
    });
}
</script>
@endsection
