@extends('admin.layout.app')
@section('admin_home')
<div class="container-fluid">
    <div class="row">
       <div class="col-lg-8">  
          <div class="row">
             <div class="col-sm-6 col-lg-6 col-xl-3">
                <div class="card card-block card-stretch card-height">
                   <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                         <div class="iq-cart-text text-capitalize">
                            <p class="mb-0">
                              Այցելություն
                            </p>
                         </div>
                         <div class="icon iq-icon-box-top rounded-circle bg-primary">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 24">
                               <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M15.1614 12.0531C15.1614 13.7991 13.7454 15.2141 11.9994 15.2141C10.2534 15.2141 8.83838 13.7991 8.83838 12.0531C8.83838 10.3061 10.2534 8.89111 11.9994 8.89111C13.7454 8.89111 15.1614 10.3061 15.1614 12.0531Z"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                               />
                               <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M11.998 19.355C15.806 19.355 19.289 16.617 21.25 12.053C19.289 7.48898 15.806 4.75098 11.998 4.75098H12.002C8.194 4.75098 4.711 7.48898 2.75 12.053C4.711 16.617 8.194 19.355 12.002 19.355H11.998Z"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                               />
                            </svg>
                         </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mt-3">
                         <h4 class="mb-0">1</h4>
                         {{-- <p class="mb-0 text-primary">
                            <span><i class="fa fa-caret-down me-2"></i></span>35%
                         </p> --}}
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-sm-6 col-lg-6 col-xl-3">
                <div class="card card-block card-stretch card-height">
                   <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between">
                         <div class="iq-cart-text text-capitalize">
                            <p class="mb-0 font-size-14">
                              Այցելություն Հայաստանից դուրս
                            </p>
                         </div>
                         <div class="icon iq-icon-box-top rounded-circle bg-warning">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 24">
                               <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M13.1043 4.17701L14.9317 7.82776C15.1108 8.18616 15.4565 8.43467 15.8573 8.49218L19.9453 9.08062C20.9554 9.22644 21.3573 10.4505 20.6263 11.1519L17.6702 13.9924C17.3797 14.2718 17.2474 14.6733 17.3162 15.0676L18.0138 19.0778C18.1856 20.0698 17.1298 20.8267 16.227 20.3574L12.5732 18.4627C12.215 18.2768 11.786 18.2768 11.4268 18.4627L7.773 20.3574C6.87023 20.8267 5.81439 20.0698 5.98724 19.0778L6.68385 15.0676C6.75257 14.6733 6.62033 14.2718 6.32982 13.9924L3.37368 11.1519C2.64272 10.4505 3.04464 9.22644 4.05466 9.08062L8.14265 8.49218C8.54354 8.43467 8.89028 8.18616 9.06937 7.82776L10.8957 4.17701C11.3477 3.27433 12.6523 3.27433 13.1043 4.17701Z"
                                  stroke="currentColor"
                                  stroke-width="1.5"
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                               />
                            </svg>
                         </div>
                      </div>
                      <div class="d-flex align-items-center justify-content-between mt-3">
                         <h4 class="mb-0">+55K</h4>
                         <p class="mb-0 text-warning">
                            <span><i class="fa fa-caret-up me-2"></i></span>50%
                         </p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>

    </div>
    {{-- <div class="row">
       <div class="col-sm-12 col-lg-4">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex align-items-center justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Categories</h4>
                </div>
             </div>
             <div class="card-body p-0">
                <div id="view-chart-03"></div>
             </div>
          </div>
       </div>
       <div class="col-lg-8">
          <div class="card card-block card-stretch card-height">
             <div class="card-header d-flex align-items-center justify-content-between">
                <div class="iq-header-title">
                   <h4 class="card-title">Top Category</h4>
                </div>
                <div class="card-header-toolbar d-flex align-items-center seasons">
                   <div class="iq-custom-select d-inline-block sea-epi s-margin">
                      <select name="cars" class="form-control season-select">
                         <option value="season1">Today</option>
                         <option value="season2">This Week</option>
                         <option value="season2">This Month</option>
                      </select>
                   </div>
                </div>
             </div>
             <div class="card-body row align-items-center">
                <div class="col-lg-7">
                   <div class="row list-unstyled mb-0 pb-0">
                      <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                         <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                            <span class="bg-primary" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 40%;"></span>
                         </div>
                         <div class="d-flex align-items-center">
                            <div class="iq-icon-box-view rounded me-3 text-primary">
                               <i class="fa-solid fa-film font-size-32"></i>
                            </div>
                            <div class=" ">
                               <h6 class="mb-0 font-size-14 line-height">Actions</h6>
                               <small class="text-primary mb-0">+34%</small>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                         <div class="iq-progress-bar progress-bar-vertical iq-bg-secondary">
                            <span class="bg-secondary" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 70%;"></span>
                         </div>
                         <div class="d-flex align-items-center">
                            <div class="iq-icon-box-view rounded me-3 text-secondary">
                               <i class="fa-solid fa-masks-theater font-size-32"></i>
                            </div>
                            <div class=" ">
                               <p class="mb-0 font-size-14 line-height">Comedy</p>
                               <small class="text-secondary mb-0">+44%</small>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                         <div class="iq-progress-bar progress-bar-vertical iq-bg-info">
                            <span class="bg-info" data-percent="100" style="transition: height 2s ease 0s; width: 100%; height: 40%;"></span>
                         </div>
                         <div class="d-flex align-items-center">
                            <div class="iq-icon-box-view rounded me-3 text-info">
                               <i class="fa-solid fa-skull-crossbones font-size-32"></i>
                            </div>
                            <div class=" ">
                               <p class="mb-0 font-size-14 line-height">Horror</p>
                               <small class="text-info mb-0">+56%</small>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-6 mb-3">
                         <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                            <span class="bg-warning" data-percent="100" style="transition: height 2s ease 0s; width: 40%; height: 40%;"></span>
                         </div>
                         <div class="d-flex align-items-center">
                            <div class="iq-icon-box-view rounded me-3 text-warning">
                               <i class="fa-solid fa-masks-theater font-size-32"></i>
                            </div>
                            <div class=" ">
                               <p class="mb-0 font-size-14 line-height">Drama</p>
                               <small class="text-warning mb-0">+65%</small>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-6 mb-lg-0 mb-3">
                         <div class="iq-progress-bar progress-bar-vertical iq-bg-success">
                            <span class="bg-success" data-percent="100" style="transition: height 2s ease 0s; width: 60%; height: 60%;"></span>
                         </div>
                         <div class="d-flex align-items-center mb-lg-0 mb-3">
                            <div class="iq-icon-box-view rounded me-3 text-success">
                               <i class="fa-solid fa-child font-size-32"></i>
                            </div>
                            <div class=" ">
                               <p class="mb-0 font-size-14 line-height">Kids</p>
                               <small class="text-success mb-0">+74%</small>
                            </div>
                         </div>
                      </div>
                      <div class="col-sm-6 col-md-4 col-lg-6 mb-lg-0 mb-3">
                         <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                            <span class="bg-danger" data-percent="100" style="transition: height 2s ease 0s; width: 80%; height: 80%;"></span>
                         </div>
                         <div class="d-flex align-items-center">
                            <div class="iq-icon-box-view rounded me-3 text-danger">
                               <i class="fa-solid fa-face-grin-beam-sweat font-size-32"></i>
                            </div>
                            <div class=" ">
                               <p class="mb-0 font-size-14 line-height">Thrilled</p>
                               <small class="text-danger mb-0">+40%</small>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-5">
                   <div id="view-chart-02" class="view-cahrt-02"></div>
                </div>
             </div>
          </div>
       </div>

 </div> --}}

@endsection
