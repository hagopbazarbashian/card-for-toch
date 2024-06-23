@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'Create Acount To User'}}@endsection
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
    <a href="{{route('shop-slider.index') }}"><button class="btn btn-primary">Show All</button></a>
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center vh-100">
            <div class="col-lg-8 col-md-12 align-self-center">
                <form action="{{route('add-new-card.store')}}" method="post" id="createForm" enctype="multipart/form-data">
                    @csrf
                    <div class="user-login-card bg-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Photos</label>
                                <input type="file" name="photo" class="form-control rounded-0" multiple />
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Title</label> 
                                <input type="text" name="title" class="form-control rounded-0" value="{{ old('title') }}" />
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Fee</label>
                                <input type="text" name="fee" class="form-control rounded-0" value="{{ old('title') }}" />
                            </div>
                            <div class="col">
                                <select  name="symbole" class="form-select" aria-label="Default select example">
                                    <option value="$">$</option> <!-- &#36; is the HTML entity for dollar sign ($) -->
                                    <option value="£">£</option> <!-- &#163; is the HTML entity for pound sign (£) -->
                                    <option value="€">€</option> <!-- &#8364; is the HTML entity for euro sign (€) -->
                                    <option value="Դ">Դ</option> <!-- &#8364; is the HTML entity for euro sign (Դ) -->
                                </select>
                            </div>

                            <div class="col">
                                <label class="text-white fw-500 mb-2">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Price</label>
                                <input type="number" name="price" class="form-control rounded-0" value="{{ old('price') }}" />
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Discount</label>
                                <input type="number" name="discount" class="form-control rounded-0" value="{{ old('discount') }}" />
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
