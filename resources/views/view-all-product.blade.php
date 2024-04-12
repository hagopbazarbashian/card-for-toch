
@extends('layout.app-shop')
@section('title'){{ 'Product' }}@endsection
@section('home')
<!--bread-crumb-->
<div class="iq-breadcrumb" style="background-image: url(https://v1ce.co/cdn/shop/collections/Lifestyle_image.jpg?v=1683643684&width=1800);">
    <div class="container-fluid">
       <div class="row align-items-center">
             <div class="col-sm-12">
                 <nav aria-label="breadcrumb" class="text-view-all-product">
                     <h2 class="title">Contactless Business</h2>
                     <h2 class="title">Cards</h2>
                     <ol class="breadcrumb justify-content-left">
                         <li class="breadcrumb-item"><a class="home" href="{{route('shop_page')}}">Home</a></li>
                         <li class="breadcrumb-item">Contactless Business Cards</li>
                     </ol>
                 </nav>
             </div>
         </div>
    </div>
 </div>
<!--bread-crumb-->
<section class="section-padding">
    <div class="container-fluid">
       <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 ">
        @foreach ($newproducts as $newproduct)
        <div class="col mb-5 ">
            <div class="product-block">
                @if (isset($newproduct->discount))
                <span class="onsale bg-primary">
                    Sale!
                 </span>
                @endif
               <div class="image-wrap">
                @foreach ($newproduct->photo->take(1) as $photo)
                <a href="{{route('single_card',$newproduct->id)}}">
                    <div class="product-image">
                        <img src="{{ asset('product-images/'. $photo->photo) }}" class="img-fluid w-100" alt="productImg-01" loading="lazy" />
                    </div>
                </a>
                @endforeach

               </div>
               <div class="product-caption">
                  <h5 class="product__title">
                     <a href="{{route('single_card',$newproduct->id)}}" class="title-link">{{$newproduct->title}}</a>
                  </h5>
                  @if (isset($newproduct->discount))
                  <div class="price-detail">
                    <div class="price"><del>{{$newproduct->symbole}}{{$newproduct->price}}</del>{{$newproduct->symbole}}{{$newproduct->discount}}</div>
                  </div>
                  @else
                  <div class="price-detail">
                    <div class="price">{{$newproduct->symbole}}{{$newproduct->price}}</div>
                  </div>
                  @endif
                  @php
                  $colors = json_decode($newproduct->color_id);
                  @endphp
                  @if(is_array($colors))
                  @foreach ($colors as $color)
                      <span style="display:inline-block; width:30px; height:30px; border-radius:50%;margin: 10px; background-color:{{ $color }};"></span>
                  @endforeach
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
        @endforeach

       </div>
    </div>
 </section>

@endsection
