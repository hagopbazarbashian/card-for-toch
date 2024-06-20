@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'Create Acount To User'}}@endsection
<div class="vh-100" style="background-color: black; background-size: cover; background-repeat: no-repeat; position: relative; min-height: 500px;">
    <a href="{{route('shop-slider.index') }}"><button class="btn btn-primary">Show All</button></a>
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center vh-100">
            <div class="col-lg-8 col-md-12 align-self-center">
                <form action="{{route('shop-slider.store')}}" method="post" id="createForm" enctype="multipart/form-data">
                    @csrf   
                    <div class="user-login-card bg-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Photo</label>
                                <input type="file" name="photo" class="form-control rounded-0" value="{{ old('photo') }}" />
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Title</label>
                                <input type="text" name="title" class="form-control rounded-0" value="{{ old('title') }}" />
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Description</label>
                                <input type="text" name="description" class="form-control rounded-0" value="{{ old('description') }}" />
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="full-button">
                                    <div class="iq-button">
                                        <button  class="btn text-uppercase position-relative" onclick="submitForm()">
                                            <span class="button-text">Create</span>
                                            <i class="fa-solid fa-play"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
