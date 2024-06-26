<style>
   .navbar-brand img.logo{
    height: 4.375rem !important;
    max-height: 10.375rem;
}
 .non-clickable {
        cursor: default;
        color: #555; /* Adjust the color as needed */
        /* Add any additional styles for non-clickable content */
    }
</style>
<div class="header-top dark-black d-xl-block d-none">
  <div class="container-fluid">
     <div class="row align-items-center">
        <div class="col-md-3">
           <!--Logo -->
           <div class="logo-default">
              <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                 <img class="img-fluid logo" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
              </a>
           </div>
        </div>
       
     </div>
  </div>
</div>

<div class="header-bottom header-sticky">
  <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
     <div class="container-fluid navbar-inner">
        <div class="d-flex align-items-center justify-content-between w-100 landing-header">
           <div class="d-xl-none d-flex gap-3 gap-xl-0 align-items-center">
              {{-- <div>
                 <button type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar_main" aria-controls="navbar_main" class="d-xl-none btn btn-primary rounded-pill p-1 pt-0 toggle-rounded-btn">
                    <svg width="20px" class="icon-20" viewBox="0 0 24 24">
                       <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                    </svg>
                 </button>
              </div> --}}
              <!--Logo -->
              <div class="logo-default">
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
                    </div>
                    <button type="button" class="btn-close float-end px-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                 </div>
              </div>
              <!-- container-fluid.// -->
           </nav>
           <!-- Horizontal Menu End -->
           <div class="right-panel">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-btn">
                    <span class="navbar-toggler-icon"></span>
                 </span>
              </button>
              <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
                 <div class="iq-meta-menu-container d-xl-block d-none">
                 @guest
                 @else

                 @endguest
                 </div>
                 <div class="d-xl-none">
                    <ul class="d-flex align-items-center justify-content-end gap-3 list-inline mb-0">
                       {{-- <li>
                          <div class="search-box-2">
                             <form>
                                <input type="text" class="form-control" placeholder="Search..." />
                                <button type="submit" class="search-btn">
                                   <svg width="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <circle cx="11.7669" cy="11.7666" r="8.98856" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
                                      <path d="M18.0186 18.4851L21.5426 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                   </svg>
                                </button>
                             </form>
                          </div>
                       </li> --}}
                       <li>
                          {{-- <a href="#offcanvasCart" class="text-white" data-bs-toggle="offcanvas">
                             <span class="btn-icon rounded-pill user-icons">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                   <path
                                      fill-rule="evenodd"
                                      clip-rule="evenodd"
                                      d="M10.0096 14.3334H4.44435C2.40011 14.3334 0.831841 13.595 1.2773 10.6232L1.79599 6.59575C2.07059 5.11292 3.01643 4.54541 3.84633 4.54541H10.632C11.4741 4.54541 12.365 5.15563 12.6823 6.59575L13.201 10.6232C13.5794 13.2594 12.0538 14.3334 10.0096 14.3334Z"
                                      stroke="currentColor"
                                      stroke-width="1.5"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                   ></path>
                                   <path
                                      d="M10.1008 4.39882C10.1008 2.80811 8.81129 1.51858 7.22057 1.51858V1.51858C6.45457 1.51533 5.71883 1.81735 5.17604 2.35786C4.63325 2.89836 4.32812 3.63282 4.32813 4.39882H4.32812"
                                      stroke="currentColor"
                                      stroke-width="1.5"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                   ></path>
                                   <path d="M9.1983 7.4013H9.16779" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                   <path d="M5.3106 7.4013H5.28009" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                             </span>
                          </a>
                       </li> --}}
                       <li class="dropdown" id="itemdropdown2">
                          <a class="text-white d-flex align-items-center" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             <div class="btn-icon rounded-pill user-icons">
                                <span class="btn-inner">
                                   <svg class="icon-18" width="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path
                                         fill-rule="evenodd"
                                         clip-rule="evenodd"
                                         d="M9.87651 15.2063C6.03251 15.2063 2.74951 15.7873 2.74951 18.1153C2.74951 20.4433 6.01251 21.0453 9.87651 21.0453C13.7215 21.0453 17.0035 20.4633 17.0035 18.1363C17.0035 15.8093 13.7415 15.2063 9.87651 15.2063Z"
                                         stroke="currentColor"
                                         stroke-width="1.5"
                                         stroke-linecap="round"
                                         stroke-linejoin="round"
                                      ></path>
                                      <path
                                         fill-rule="evenodd"
                                         clip-rule="evenodd"
                                         d="M9.8766 11.886C12.3996 11.886 14.4446 9.841 14.4446 7.318C14.4446 4.795 12.3996 2.75 9.8766 2.75C7.3546 2.75 5.3096 4.795 5.3096 7.318C5.3006 9.832 7.3306 11.877 9.8456 11.886H9.8766Z"
                                         stroke="currentColor"
                                         stroke-width="1.5"
                                         stroke-linecap="round"
                                         stroke-linejoin="round"
                                      ></path>
                                      <path d="M19.2036 8.66919V12.6792" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                      <path d="M21.2497 10.6741H17.1597" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                   </svg>
                                </span>
                             </div> 
                          </a>
                          <div class="dropdown-menu dropdown-menu-end dropdown-user border-0 p-0 m-0" aria-labelledby="navbarDropdown2">
                             <div class="user-info d-flex align-items-center gap-3 mb-3">
                             @if(auth()->check())
                                  <span class="font-size-14 fw-500 text-capitalize text-white">{{auth()->user()->email}}</span>
                             @endif
                             </div>
                             @if(auth()->check())
                             <div class="iq-sub-card d-flex align-items-center gap-3">
                               <h6 class="mb-0 font-size-14 fw-normal non-clickable">User Number : 15{{auth()->user()->id}}</h6>
                             </div>
                             @endif
                             <a href="{{route('home')}}" class="iq-sub-card d-flex align-items-center gap-3">
                                <h6 class="mb-0 font-size-14 fw-normal">My Account</h6>
                             </a>
                             @if(auth()->check())
                              <a href="{{ route('user_reset', ['id' => auth()->user()->id]) }}" class="iq-sub-card d-flex align-items-center gap-3">
                                <h6 class="mb-0 font-size-14 fw-normal">Reset Password</h6>
                             </a>
                             @endif
                             <a href="{{route('logout')}}" class="iq-sub-card iq-logout-2 mt-1 d-flex justify-content-center gap-2">
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
