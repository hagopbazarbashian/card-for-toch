@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'Category Edit'}}@endsection
<style>
    .imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;  
  background:url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
  background-color:#fff;
    background-size: cover;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}
</style>
<div class="vh-100" style="background-color: black; background-size: cover; background-repeat: no-repeat; position: relative; min-height: 500px;">
    <a href="{{route('admin-category.index') }}"><button class="btn btn-primary">Show All</button></a>
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center vh-100">
            <div class="col-lg-8 col-md-12 align-self-center">
                <form action="{{route('admin-category.update',$category->id)}}" method="post" id="createForm" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="bd-example">
                        <img class="bd-placeholder-img img-thumbnail" src="{{asset('category/'.$category->photo)}}" width="200" height="200" alt="Photo">
                        <!-- Add other photo details as needed -->
                    </div>
                    <div class="user-login-card bg-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Photos</label>
                                <input type="file" name="photo" class="form-control rounded-0"/>
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Title</label>
                                <input type="text" name="name" class="form-control rounded-0" value="{{ $category->name }}" />
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="full-button">
                                    <div class="iq-button">
                                        <button  class="btn text-uppercase position-relative" onclick="submitForm()">
                                            <span class="button-text">Update</span>
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
