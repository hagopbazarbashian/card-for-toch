<style>
  .list-inline{
    display: flex !important;
    /* justify-content: center !important;  */
  }
  
  @media only screen and (max-width: 767px) {
      .list-inline{
        display: block !important;
     }
  } 
</style>

<section class="category-slider-block">
    <div class="container-fluid">
       <div class="text-center">
          <h4 class="my-4 mt-md-3 mt-sm-3">Best Selling Categories</h4>
       </div>
       <div class="position-relative swiper swiper-card" data-slide="4" data-laptop="4" data-tab="3" data-mobile="2"
          data-mobile-sm="1" data-autoplay="false" data-loop="false" data-navigation="true" data-pagination="true">
          <ul class="list-inline swiper-wrapper p-0 m-0">
             @foreach ($categorys as $category)
             <li class="swiper-slide slide-item">
                <div class="category-inner position-relative">
                  <div class="category_image">
                    <a href="shop/shop.html">
                      <img src="{{ asset('category/' . $category->photo) }}" class="img-fluid" alt="catImg-{{ $category->id }}" />
                    </a>
                    <div class="category-details">
                      <h5 class="category-title">
                        <a href="shop/shop.html">
                          {{ $category->name }}
                        </a>
                      </h5>
                    </div>
                  </div>
                </div>
             </li>
             @endforeach
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
       </div>
    </div>
 </section>