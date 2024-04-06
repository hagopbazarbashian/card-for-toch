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
       <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
        @foreach ($newproducts as $newproduct)
        <div class="col mb-5 product">
             <div class="product-block">
              @if (isset($newproduct->discount))
              <span class="onsale bg-primary">
                  Sale!
              </span>
              @endif
                <div class="image-wrap">
                    <div class="window">
                        <div class="window__slider">
                          @foreach ($newproduct->photo as $photos)
                          <div class="window__slider__img-container window__slider__img-container--opacity">
                            <img src="{{ asset('product-images/'.$photos->photo) }}" alt="city view from sky" />
                          </div>
                          @endforeach
                        </div>
                        <button class="window__slide-left">
                          <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="window__slide-right">
                          <i class="fas fa-chevron-right"></i>
                        </button>
                        <div class="window__current-img">
                          <button class="window__current-img__btn window__current-img__btn--current"></button>
                          <button class="window__current-img__btn"></button>
                          <button class="window__current-img__btn"></button>
                          <button class="window__current-img__btn"></button>
                          <button class="window__current-img__btn"></button>
                        </div>
                      </div>
                </div>
                <div class="product-caption">
                   <h5 class="product__title">
                      <a href="#" class="title-link"> Black Bow</a>
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
<script>
    var slider = document.querySelector('.window__slider');
var images = document.querySelectorAll('.window__slider__img-container');
var buttonsCurrentImage = document.querySelectorAll('.window__current-img__btn');
var btnSlideLeft = document.querySelector('.window__slide-left');
var btnSlideRight = document.querySelector('.window__slide-right');

/**
 * -------------------------------------------------------------
 * -------------------------------------------------------------
 * -------------------------------------------------------------
 * !!! IMPORTANT !!!
 * in closure ImageSlider calling order of functions is very important
 * for this code to work properly
 *
 * main logic is behind calculating current and previous position
 * first figure out how it's working, then try to make modification
 * -------------------------------------------------------------
 * -------------------------------------------------------------
 * -------------------------------------------------------------
 */

// closures main purpose encapsulation of interval
// without them clearing interval is messed due to js
// problematic scope of function accessing global var
var imageSlider = (function() {
  var image = {
    first: 0,
    second: 1,
    third: 2,
    fourth: 3,
    fifth: 4
  };

  // previous & current Image are indexes
  var previousImage = image.fifth;
  var currentImage = image.first;
  var interval = null;

  // cross browser transform
  function translateX(num) {
    var tr =
      'transform: translateX(-' + num + '00%);' +
      '-moz-transform: translateX(-' + num + '00%);' +
      '-ms-transform: translateX(-' + num + '00%);' +
      '-o-transform: translateX(-' + num + '00%);' +
      '-webkit-transform: translateX(-' + num + '00%);';

    return tr;
  }

  // used for automatic sliding right
  function slideRight() {
    previousImage = currentImage;
    currentImage++;

    // if on last element, go to first one
    if(currentImage > image.fifth)
      currentImage = image.first;

    slider.setAttribute('style', translateX(currentImage));

    // adds opacity on current and removes on previous
    images[currentImage].classList
      .add('window__slider__img-container--opacity');
    images[previousImage].classList
      .remove('window__slider__img-container--opacity');

    // marks currently active image on respective button
    // removes from previous
    buttonsCurrentImage[currentImage].classList
      .add('window__current-img__btn--current');
    buttonsCurrentImage[previousImage].classList
      .remove('window__current-img__btn--current');
  }

  return {
    // clicking button to go directly to image
    // clears interval at start to remove interference of automatic movement
    // sets interval afterwards to continue slide animation
    goToImage: function(imageNumber) {
      clearInterval(interval);

      // remove effect from current image/button
      var beforeGoingToImage = currentImage;
      images[beforeGoingToImage].classList
        .remove('window__slider__img-container--opacity');
      buttonsCurrentImage[beforeGoingToImage].classList
        .remove('window__current-img__btn--current');

      // get new image
      currentImage = imageNumber;
      // no need to calculate previous because
      // slideRight, handleBtnSlideRight, handleBtnSlideLeft handle it

      slider.setAttribute('style', translateX(currentImage));

      // add effect to current visible image and respective btn
      images[currentImage].classList
      .add('window__slider__img-container--opacity');
      buttonsCurrentImage[currentImage].classList
      .add('window__current-img__btn--current');

      // start animation
      interval = setInterval(slideRight, 3000);
    },
    handleBtnSlideLeft: function() {
      // stop animation
      clearInterval(interval);

      // remove effect from current image & btn
      var currentBeforeSlidingLeft = currentImage;
      images[currentBeforeSlidingLeft].classList
        .remove('window__slider__img-container--opacity');
      buttonsCurrentImage[currentBeforeSlidingLeft].classList
        .remove('window__current-img__btn--current');

      // calculate new position
      currentImage = previousImage;
      previousImage--;

      // if on first element, go to last one
      if(previousImage < image.first) {
        previousImage = image.fifth;
      }

      // move slider
      slider.setAttribute('style', translateX(currentImage));

      // add effect to image and respective btn
      images[currentImage].classList
        .add('window__slider__img-container--opacity');
      buttonsCurrentImage[currentImage].classList
        .add('window__current-img__btn--current');

      // start animation
      interval = setInterval(slideRight, 3000);
    },
    handleBtnSlideRight: function() {
      // stop animation
      clearInterval(interval);

      // remove effect from current before moving to new one
      var currentBeforeSlidingRight = currentImage;
      images[currentBeforeSlidingRight].classList
        .remove('window__slider__img-container--opacity');
      buttonsCurrentImage[currentBeforeSlidingRight].classList
        .remove('window__current-img__btn--current');

      // calculate new position
      previousImage = currentImage;
      currentImage++;

      // if on last element, go to first one
      if(currentImage > image.fifth)
        currentImage = image.first;

      // move slider
      slider.setAttribute('style', translateX(currentImage));

      // add to new image and button
      images[currentImage].classList
        .add('window__slider__img-container--opacity');
      buttonsCurrentImage[currentImage].classList
        .add('window__current-img__btn--current');

      // start animation
      interval = setInterval(slideRight, 3000);
    },
    // used to start animation when page loads
    startSlideRightInterval: function() {
      interval = setInterval(slideRight, 3000);
    }
  };
})();

function startSlider() {
  // start after loading page
  imageSlider.startSlideRightInterval();

  // left and right move by clicking
  btnSlideLeft.addEventListener('click', imageSlider.handleBtnSlideLeft);
  btnSlideRight.addEventListener('click', imageSlider.handleBtnSlideRight);

  // 5 button listeners for each image
  buttonsCurrentImage[0].addEventListener(
    'click', function() {
      imageSlider.goToImage(0)
    }
  );
  buttonsCurrentImage[1].addEventListener(
    'click', function() {
      imageSlider.goToImage(1)
    }
  );
  buttonsCurrentImage[2].addEventListener(
    'click', function() {
      imageSlider.goToImage(2)
    }
  );
  buttonsCurrentImage[3].addEventListener(
    'click', function() {
      imageSlider.goToImage(3)
    }
  );
  buttonsCurrentImage[4].addEventListener(
    'click', function() {
      imageSlider.goToImage(4)
    }
  );
}

window.addEventListener('load', startSlider);
</script>
@endsection
