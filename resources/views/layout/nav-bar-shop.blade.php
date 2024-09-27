<style>
  .navbar-brand img.logo {
      height: 5.375rem !important;
      max-height: 4.375rem !important;
  }
  @media only screen and (max-width: 767px) {
      .navbar-brand img.logo {
          height: 5.375rem !important;
          max-height: 4.375rem !important;
          position: relative;
          top: 21px;
      }
      .language-selector-mobile {
          display: flex;
          justify-content: center;
          gap: 1rem;
          margin-top: 10px;
      }
      .language-selector-mobile a {
          color: white;
          text-decoration: none;
      }
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">


<header class="header-center-home header-merchandise">
  <div class="header-top d-xl-block d-none">
      <div class="container-fluid">
          <div class="row align-items-center">
              <div class="col-md-3 d-flex justify-content-center">
                  <!-- Logo -->
                  <div class="logo-default">
                      <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                          <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                      </a>
                  </div>
              </div>
              <div class="col-md-9">
                  <ul class="d-flex align-items-center justify-content-end gap-3 list-inline mb-0 language-selector">
                      <li class="d-flex align-items-center">
                          <a class="text-white d-flex align-items-center" href="{{ url('/') }}?lang=en">
                              <span class="flag-icon flag-icon-gb me-2"></span>
                          </a>
                      </li>
                      <li class="d-flex align-items-center">
                          <a class="text-white d-flex align-items-center" href="{{ url('/') }}?lang=hy">
                              <span class="flag-icon flag-icon-am me-2"></span>
                          </a>
                      </li>
                      <li class="d-flex align-items-center">
                          <a class="text-white d-flex align-items-center" href="{{ url('/') }}?lang=ru">
                              <span class="flag-icon flag-icon-ru me-2"></span>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <div class="header-bottom header-sticky">
      <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
          <div class="container-fluid navbar-inner" style="display: flex; justify-content: center;">
              <div class="d-xl-none d-flex gap-3 gap-xl-0 align-items-center">
                  <!-- Logo -->
                  <div class="logo-default">
                      <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                          <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                      </a>
                  </div>
                  <!-- Language Selector for Mobile -->
                  <div class="language-selector-mobile">
                      <a href="{{ url('/') }}?lang=en">
                          <span class="flag-icon flag-icon-gb"></span>
                      </a>
                      <a href="{{ url('/') }}?lang=hy">
                          <span class="flag-icon flag-icon-am"></span>
                      </a>
                      <a href="{{ url('/') }}?lang=ru">
                          <span class="flag-icon flag-icon-ru"></span>
                      </a>
                  </div>
              </div>
              <!-- Horizontal Menu Start -->
              <nav id="navbar_main" class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav py-xl-0"> 
                  <div class="container-fluid p-lg-0">
                      <div class="offcanvas-header px-0">
                          <div class="navbar-brand ms-3">
                              <!-- Logo -->
                              <div class="logo-default">
                                  <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                      <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                                  </a>
                              </div>
                          </div>
                          <button type="button" class="btn-close float-end px-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <ul class="navbar-nav iq-nav-menu list-unstyled" id="header-menu">
                          <!-- Add your menu items here -->
                      </ul>
                  </div>
              </nav>
              <!-- Horizontal Menu End -->
              <div class="right-panel">
                  <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
                      <div class="iq-meta-menu-container d-xl-block d-none">
                          <ul class="d-flex align-items-center m-0 list-inline iq-meta-menu">
                              <li>
                                  <a href="{{route('register')}}">{{ translate('my_account') }}</a>
                              </li>
                              <li>  
                                  <a href="#">{{ translate('customer_support') }}</a>
                              </li>
                              <li>
                                  <a href="#">{{ translate('help') }}</a>
                              </li>
                              {{-- @foreach($newproducts as $product)
                                <li>
                                    @if($favorit->contains('product_id', $product->id)) <!-- Adjust 'newproduct_id' as needed -->
                                        <a href="{{route('add_favorit_list_show',$favorit_list->user_sessian)}}" style="font-size: 30px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                    @else
                                        <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                    @endif
                                </li>
                            @endforeach --}}
                          </ul>
                      </div>
                      <div class="d-xl-none">
                          <ul class="d-flex align-items-center justify-content-end gap-3 list-inline mb-0">
                              <!-- Add other items here if needed -->
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
  </div>
</header>
@include('shopping-cart')
