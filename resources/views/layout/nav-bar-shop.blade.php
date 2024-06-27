<style>
    .navbar-brand img.logo{
    height: 5.375rem !important;
    max-height: 4.375rem !important;
   }
   @media only screen and (max-width: 767px) {
    .navbar-brand img.logo{
     height: 5.375rem !important;
     max-height: 4.375rem !important;
     position: relative;   
     top: 21px;
    }
   }
</style>
<header class="header-center-home header-merchandise">
    <div class="header-top d-xl-block d-none">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3 d-flex justify-content-center">
                    <!--Logo -->
                    <div class="logo-default">
                        <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                            <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                        </a>
                    </div>
                    <div class="logo-hotstar">
                        <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                            <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                        </a>
                    </div>
                    <div class="logo-prime">
                        <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                            <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                        </a>
                    </div>
                    <div class="logo-hulu">
                        <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                            <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <ul class="d-flex align-items-center justify-content-end gap-3 list-inline mb-0">
                        {{-- <li>
                            <a href="#offcanvasCart" class="text-white" data-bs-toggle="offcanvas">
                                <span class="btn-icon rounded-pill user-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16"
                                        fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.0096 14.3334H4.44435C2.40011 14.3334 0.831841 13.595 1.2773 10.6232L1.79599 6.59575C2.07059 5.11292 3.01643 4.54541 3.84633 4.54541H10.632C11.4741 4.54541 12.365 5.15563 12.6823 6.59575L13.201 10.6232C13.5794 13.2594 12.0538 14.3334 10.0096 14.3334Z"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M10.1008 4.39882C10.1008 2.80811 8.81129 1.51858 7.22057 1.51858V1.51858C6.45457 1.51533 5.71883 1.81735 5.17604 2.35786C4.63325 2.89836 4.32812 3.63282 4.32813 4.39882H4.32812"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M9.1983 7.4013H9.16779" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M5.3106 7.4013H5.28009" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </span>
                            </a>
                        </li> --}}
                        {{-- Login Button --}}
                        <li class="dropdown" id="itemdropdown1">
                            <a class="text-white d-flex align-items-center" href="/sddsds" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="btn-icon rounded-pill user-icons">
                                    <span class="btn-inner">
                                        <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M19.2036 8.66919V12.6792" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M21.2497 10.6741H17.1597" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </div>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-sticky">
        <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
            <div class="container-fluid navbar-inner" style="display: flex;justify-content: center;">
                <div class="d-flex align-items-center justify-content-center w-100 landing-header">
                    <div class="d-xl-none d-flex gap-3 gap-xl-0 align-items-center">
                        <div>
                            <button type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar_main"
                                aria-controls="navbar_main"
                                class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 toggle-rounded-btn">
                                <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                       <!--Logo -->
                        <div class="logo-default">
                            <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                            </a>
                        </div>
                        <div class="logo-hotstar">
                            <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                            </a>
                        </div>
                        <div class="logo-prime">
                            <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                            </a>
                        </div>
                        <div class="logo-hulu">
                            <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                            </a>
                        </div>
                    </div>
                    <!-- Horizontal Menu Start -->
                    <nav id="navbar_main" class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav py-xl-0">
                      <div class="container-fluid p-lg-0">
                        <div class="offcanvas-header px-0">
                          <div class="navbar-brand ms-3">
                            <!--Logo -->
                            <div class="logo-default">
                                <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                    <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                                </a>
                            </div>
                            <div class="logo-hotstar">
                                <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                    <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                                </a>
                            </div>
                            <div class="logo-prime">
                                <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                    <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                                </a>
                            </div>
                            <div class="logo-hulu">
                                <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                                    <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                                </a>
                            </div>
                          </div>
                          <button type="button" class="btn-close float-end px-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav iq-nav-menu  list-unstyled" id="header-menu">
                          {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#homePages" role="button" aria-expanded="false" aria-controls="homePages">
                              <span class="item-name">Home</span>
                              <span class="menu-icon">
                                <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                                <span class="toggle-menu">
                                  <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                  <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                </span>
                              </span>
                            </a>
                            <ul class="sub-nav collapse  list-unstyled" id="homePages">
                              <li class="nav-item">
                                <a class="nav-link " href="./index.html"> OTT Home </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./home.html"> Home </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./movie.html"> Movie </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./tv-show.html"> TV Show </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./video.html"> Video </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link active" href="./merchandise-store.html"> Merchandise Store </a>
                              </li>
                            </ul>
                          </li> --}}
                          {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#features" role="button" aria-expanded="false" aria-controls="homePages">
                              <span class="item-name">Features</span>
                              <span class="menu-icon">
                                <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                                <span class="toggle-menu">
                                  <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                  <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                </span>
                              </span>
                            </a>
                            <ul class="sub-nav collapse  list-unstyled" id="features">
                              <li class="nav-item">
                                <a class="nav-link " href="./restricted-content.html"> Restricted Content </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./related-merchandise.html"> Related Merchandise </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./playlist.html"> Playlist </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./geners.html"> Genres </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./cast.html"> Cast </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./tags.html"> Tags </a>
                              </li>
                            </ul>
                          </li> --}}
                          {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#pages" role="button" aria-expanded="false" aria-controls="homePages">
                              <span class="item-name">Pages</span>
                              <span class="menu-icon">
                                <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                                <span class="toggle-menu">
                                  <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                  <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                </span>
                              </span>
                            </a>
                            <ul class="sub-nav collapse  list-unstyled" id="pages">
                              <li class="nav-item">
                                <a class="nav-link " href="./about-us.html"> About Us </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./contact-us.html"> Contact Us </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./faq.html"> FAQ </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./privacy-policy.html"> Privacy Policy </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./pricing-plan.html"> Pricing Plan </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./coming-soon.html"> Coming Soon </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#error-page" role="button" aria-expanded="false" aria-controls="error-page">
                                  <span class="item-name">Error Page</span>
                                  <span class="menu-icon">
                                    <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                    <span class="toggle-menu">
                                      <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                      <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                    </span>
                                  </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="error-page">
                                  <li class="nav-item">
                                    <a class="nav-link " href="./error-page-one.html"> Error Page 1 </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./error-page-two.html"> Error Page 2 </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li> --}}
                          {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="false" aria-controls="blog">
                              <span class="item-name">Blog</span>
                              <span class="menu-icon">
                                <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                                <span class="toggle-menu">
                                  <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                  <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                </span>
                              </span>
                            </a>
                            <ul class="sub-nav collapse  list-unstyled" id="blog">
                              <li class="nav-item">
                                <a class="nav-link " href="./blog/blog-listing.html"> Listing </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#blog-grid" role="button" aria-expanded="false" aria-controls="blog-grid">
                                  <span class="item-name">Blog Grid</span>
                                  <span class="menu-icon">
                                    <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                    <span class="toggle-menu">
                                      <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                      <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                    </span>
                                  </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="blog-grid">
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/one-column.html"> 1 Column </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/two-column.html"> 2 Column </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/three-column.html"> 3 Column </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/four-column.html"> 4 Column </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#blog-sidebar" role="button" aria-expanded="false" aria-controls="blog-sidebar">
                                  <span class="item-name">Blog Sidebar</span>
                                  <span class="menu-icon">
                                    <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                    <span class="toggle-menu">
                                      <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                      <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                    </span>
                                  </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="blog-sidebar">
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/left-sidebar.html"> Left Sidebar </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/right-sidebar.html"> Right Sidebar </a>
                                  </li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="collapse" href="#blog-single" role="button" aria-expanded="false" aria-controls="blog-single">
                                  <span class="item-name">Blog Single</span>
                                  <span class="menu-icon">
                                    <i class="fa fa-caret-right toggledrop-desktop right-icon" aria-hidden="true"></i>
                                    <span class="toggle-menu">
                                      <i class="fa fa-plus  arrow-active text-white" aria-hidden="true"></i>
                                      <i class="fa fa-minus  arrow-hover text-white" aria-hidden="true"></i>
                                    </span>
                                  </span>
                                </a>
                                <ul class="sub-nav collapse  list-unstyled" id="blog-single">
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/blog-template.html"> Blog Template </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/blog-detail.html"> Standard </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/blog-audio.html"> Audio </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/blog-video.html"> Video </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/blog-link.html"> Link </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/blog-quote.html"> Quote </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link " href="./blog/blog-gallery.html"> Gallery </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li> --}}
                          {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#shop" role="button" aria-expanded="false" aria-controls="shop">
                              <span class="item-name">Shop</span>
                              <span class="menu-icon">
                                <i class="fa fa-caret-down toggledrop-desktop right-icon" aria-hidden="true"></i>
                                <span class="toggle-menu">
                                  <i class="fa fa-plus arrow-active text-white" aria-hidden="true"></i>
                                  <i class="fa fa-minus arrow-hover text-white" aria-hidden="true"></i>
                                </span>
                              </span>
                            </a>
                            <ul class="sub-nav collapse  list-unstyled" id="shop">
                              <li class="nav-item">
                                <a class="nav-link " href="./shop/shop.html"> Shop </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./shop/my-account.html"> My Account Page </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./shop/cart.html"> Cart Page </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./shop/wishlist.html"> Wishlist Page </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./shop/checkout.html"> Checkout Page </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " href="./shop/order-tracking.html"> Order Tracking </a>
                              </li>
                            </ul>
                          </li> --}}
                        </ul>
                      </div>
                      <!-- container-fluid.// -->
                    </nav>
                    <!-- Horizontal Menu End -->                    <div class="right-panel">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-btn">
                                <span class="navbar-toggler-icon"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
                            <div class="iq-meta-menu-container d-xl-block d-none">
                                <ul class="d-flex align-items-center m-0 list-inline iq-meta-menu">
                                    <li>
                                        <a href="./shop/my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="https://iqonic.desky.support/">Customer Support</a>
                                    </li>
                                    <li>
                                        <a href="./contact-us.html">Help?</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-xl-none">
                                <ul class="d-flex align-items-center justify-content-end gap-3 list-inline mb-0">
                                    <li>
                                        <div class="search-box-2">
                                            <form>
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <button type="submit" class="search-btn">
                                                    <svg width="16" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="11.7669" cy="11.7666" r="8.98856"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                        </circle>
                                                        <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#offcanvasCart" class="text-white" data-bs-toggle="offcanvas">
                                            <span class="btn-icon rounded-pill user-icons">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16"
                                                    fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M10.0096 14.3334H4.44435C2.40011 14.3334 0.831841 13.595 1.2773 10.6232L1.79599 6.59575C2.07059 5.11292 3.01643 4.54541 3.84633 4.54541H10.632C11.4741 4.54541 12.365 5.15563 12.6823 6.59575L13.201 10.6232C13.5794 13.2594 12.0538 14.3334 10.0096 14.3334Z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path
                                                        d="M10.1008 4.39882C10.1008 2.80811 8.81129 1.51858 7.22057 1.51858V1.51858C6.45457 1.51533 5.71883 1.81735 5.17604 2.35786C4.63325 2.89836 4.32812 3.63282 4.32813 4.39882H4.32812"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                    <path d="M9.1983 7.4013H9.16779" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M5.3106 7.4013H5.28009" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="dropdown" id="itemdropdown2">
                                        <a class="text-white d-flex align-items-center" href="#" id="navbarDropdown2"
                                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="btn-icon rounded-pill user-icons">
                                                <span class="btn-inner">
                                                    <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M19.2036 8.66919V12.6792" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M21.2497 10.6741H17.1597" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-user border-0 p-0 m-0"
                                            aria-labelledby="navbarDropdown2">
                                            <div class="user-info d-flex align-items-center gap-3 mb-3">
                                                <img src="./assets/images/user/user1.webp" class="img-fluid" alt=""
                                                    loading="lazy">
                                                <span
                                                    class="font-size-14 fw-500 text-capitalize text-white">Jenny</span>
                                            </div>
                                            <a href="./playlist.html" class="iq-sub-card d-flex align-items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 22" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.84455 20.6621C4.15273 20.6621 1 20.0876 1 17.7868C1 15.486 4.13273 13.3621 7.84455 13.3621C11.5364 13.3621 14.6891 15.4654 14.6891 17.7662C14.6891 20.066 11.5564 20.6621 7.84455 20.6621Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.83725 10.1738C10.26 10.1738 12.2236 8.21015 12.2236 5.78742C12.2236 3.36469 10.26 1.40015 7.83725 1.40015C5.41452 1.40015 3.44998 3.36469 3.44998 5.78742C3.4418 8.20196 5.3918 10.1656 7.80634 10.1738C7.81725 10.1738 7.82725 10.1738 7.83725 10.1738Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <h6 class="mb-0 font-size-14 fw-normal">My Account</h6>
                                            </a>
                                            <a href="view-all-movie.html"
                                                class="iq-sub-card d-flex align-items-center gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                    viewBox="0 0 14 14" fill="none">
                                                    <path
                                                        d="M6.425 13.75V7.575H0.25V6.425H6.425V0.25H7.575V6.425H13.75V7.575H7.575V13.75H6.425Z"
                                                        fill="white"></path>
                                                </svg>
                                                <h6 class="mb-0 font-size-14 fw-normal">Watchlist</h6>
                                            </a>
                                            <a href="pricing-plan.html"
                                                class="iq-sub-card d-flex align-items-center gap-3">
                                                <i class="fa-regular fa-star"></i>
                                                <h6 class="mb-0 font-size-14 fw-normal">Subscription</h6>
                                            </a>
                                            <a href="#"
                                                class="iq-sub-card iq-logout-2 mt-1 d-flex justify-content-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16" fill="none">
                                                    <path
                                                        d="M1.82209 15.9999C1.46654 15.9999 1.16283 15.874 0.910981 15.6221C0.659129 15.3703 0.533203 15.0666 0.533203 14.711V1.73322C0.533203 1.37767 0.659129 1.07397 0.910981 0.822114C1.16283 0.570262 1.46654 0.444336 1.82209 0.444336H7.95543V1.44434H1.82209C1.74802 1.44434 1.68135 1.47397 1.62209 1.53322C1.56283 1.59248 1.5332 1.65915 1.5332 1.73322V14.711C1.5332 14.7851 1.56283 14.8517 1.62209 14.911C1.68135 14.9703 1.74802 14.9999 1.82209 14.9999H7.95543V15.9999H1.82209ZM12.0888 11.5999L11.3554 10.8888L13.5332 8.73322H5.68876V7.711H13.511L11.3332 5.55545L12.0665 4.82211L15.4665 8.24434L12.0888 11.5999Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <h6 class="mb-0 font-size-14 fw-normal">Logout</h6>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
@include('shopping-cart')
