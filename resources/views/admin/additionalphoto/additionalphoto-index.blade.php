@extends('admin.layout.app')

@section('admin_home')
@section('title', 'Additional Photo') 

<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                <div class="d-flex align-items-center pt-3">
                   <div class="form-group">
                      <select class="form-control select2-basic-multiple" placeholder="No Action">
                         <option>No Action</option>
                         <option>Status</option>
                         <option>Delete</option>
                      </select>
                   </div>
                   <a href="{{ route('admin-additional-photo.create') }}" class="btn btn-primary ml-3">Add Product</a>
                </div>
             </div>
             <div class="card-body">
                <div class="row">
                    @foreach ($additionalphotos as $additionalphoto)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100"> 
                            <img src="{{ asset('additionphoto/'.$additionalphoto->photo ?? 'default.jpg') }}" class="card-img-top" alt="Card Image">
                            <div class="card-body d-flex flex-column">
                                Additional Photo <img src="{{ asset('productimages/'.$additionalphoto->newproductt->photo ?? 'null') }}" class="card-img-top" alt="Card Image">
                                <div class="mt-auto">
                                    <a href="{{ route('admin-additional-photo.edit',$additionalphoto->id) }}" class="btn btn-primary mb-2">Edit</a>
                                    <form action="{{ route('admin-additional-photo.destroy',$additionalphoto->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
