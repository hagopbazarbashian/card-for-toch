@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'User List'}}@endsection
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                <div class="d-flex align-items-center pt-3">
                   <div class="form-group">
                      <select type="select" class="form-control select2-basic-multiple" placeholder="No Action">
                         <option>No Action</option>
                         <option>Status</option>
                         <option>Delete</option>
                      </select>
                      <a href="{{route('add-new-card.create') }}"><button class="btn btn-primary">Add Product</button></a>
                   </div>
                </div>
             </div>
             <div class="d-flex flex-wrap justify-content-center" >
                <div class="" style="width:50%;">
                    <div class="card">
                            <img src="{{ asset('productimages/'.$newproducts->photo ?? null) }}" class="card-img-top" alt="Card Image">
                            <!-- You can add a default image or handle the case where no images are available -->
                            <div class="card-body">
                            <h5 class="card-title">{{ $newproducts->title ?? null }}</h5>
                            <p class="card-text">{{ $newproducts->description ?? null}}</p>
                            <p class="card-text">{{ $newproducts->price ?? null }} {{ $newproducts->symbole ?? null}}</p>
                            <a href="" class="btn btn-primary">Edit</a>

                            <form action="#" method="post"><br>
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-primary" >
                                    <span class="button-text">Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
       </div>
    </div>
 </div>

@endsection
