@extends('admin.layout.app')

@section('admin_home')
@section('title', 'Card List') 

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
                   <a href="{{ route('add-new-card.create') }}" class="btn btn-primary ml-3">Add Product</a>
                </div>
             </div>
             <div class="card-body">
                <div class="row">
                    @foreach ($newproducts as $newproduct)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('productimages/'.$newproduct->photo ?? 'default.jpg') }}" class="card-img-top" alt="Card Image">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $newproduct->title ?? 'No Title' }}</h5>
                                <p class="card-text">{{ $newproduct->description ?? 'No Description' }}</p>
                                <p class="card-text">{{ $newproduct->price ?? '0' }} {{ $newproduct->symbole ?? '' }}</p>
                                Fee <p class="card-text">{{ $newproduct->fee ?? '0' }} {{ $newproduct->symbole ?? '' }}</p>
                                Category <p class="card-text">{{ $newproduct->category->name ?? 'NUll' }}</p>
                                <div class="mt-auto">
                                    <a href="{{ route('add-new-card.edit',$newproduct->id) }}" class="btn btn-primary mb-2">Edit</a>
                                    <form action="{{ route('add-new-card.destroy',$newproduct->id) }}" method="post" class="d-inline">
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
