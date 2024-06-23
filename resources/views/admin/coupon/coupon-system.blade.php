@extends('admin.layout.app')

@section('admin_home')
@section('title', 'Coupon System') 

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
                   <a href="{{ route('coupon.create') }}" class="btn btn-primary ml-3">Add Product</a>
                </div>
             </div>
             <div class="card-body">
                <div class="row">
                    @foreach ($bonus as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            Uniq number<h5 class="card-title">{{ $item->number ?? 'No number' }}</h5>
                                Rate<p class="card-text">{{ $item->rate ?? 'No Rate' }}</p>
                                <div class="mt-auto">
                                    <form action="{{ route('coupon.destroy',$item->id) }}" method="post" class="d-inline">
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
