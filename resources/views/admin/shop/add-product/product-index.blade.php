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
                @if (isset($newproducts))
                @foreach ($newproducts as $newproduct)
                <div class="" style="width:50%;">
                    <div class="card">
                        @if($newproduct->photo->isNotEmpty())
                            @foreach($newproduct->photo as $photo)
                                <img src="{{ asset('product-images/' . $photo->photo) }}" class="card-img-top" alt="Card Image">
                            @endforeach
                        @else
                            <!-- You can add a default image or handle the case where no images are available -->
                            <img src="{{ asset('path/to/default/image.jpg') }}" class="card-img-top" alt="Default Image">
                        @endif
                        <div class="card-body">
                            @php
                            $colorData = json_decode($newproduct->color_id);
                            @endphp
                            @if(isset($colorData) && is_array($colorData))
                                @foreach ($colorData as $colorCode)
                                    <div style="width: 50px; height: 50px; background-color: {{ $colorCode }}; border-radius: 10px;"></div>
                                @endforeach
                            @else
                                <!-- Handle the case where colors is not available or not in the expected format -->
                            @endif
                            <h5 class="card-title">{{ $newproduct->title }}</h5>
                            <p class="card-text">{{ $newproduct->description }}</p>
                            <p class="card-text">{{ $newproduct->price }} {{ $newproduct->symbole }}</p>
                            <a href="{{route('add-new-card.edit',$newproduct->id)}}" class="btn btn-primary">Edit</a>

                            <form action="{{route('add-new-card.destroy',$newproduct->id)}}" method="post"><br>
                                @csrf
                                @method('DELETE')
                                <button  class="btn btn-primary" >
                                    <span class="button-text">Delete</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
          </div>
       </div>
    </div>
 </div>

@endsection
