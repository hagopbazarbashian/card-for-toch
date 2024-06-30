@extends('admin.layout.app')

@section('admin_home')
@section('title', 'Check Out System') 

<div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Id</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th>City</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Additional Information</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Fee</th>
                    <th>Coupon Rate</th>
                    <th>Coupon Number</th>
                    <th>Pay Type</th>
                    <th>Action</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($checkouts as $checkout)
                <tr>
                    <td>
                        <img src="{{ asset('productimages/'.$checkout->newproduct->photo ?? 'default.jpg') }}" class="img-thumbnail" alt="Product Image" style="width: 100px;">
                    </td>
                    <td>{{ $checkout->id}}</td>
                    <td>{{ $checkout->name}}</td>
                    <td>{{ $checkout->lastname}}</td>
                    <td>{{ $checkout->company}}</td>
                    <td>{{ $checkout->city}}</td>
                    <td>{{ $checkout->phonenumber}}</td>
                    <td>{{ $checkout->email}}</td>
                    <td>{{ $checkout->additionalinformation}}</td>
                    <td>{{ $checkout->quantity}}</td>
                    <td>{{ $checkout->symbole}}{{ $checkout->price}}</td>
                    <td>{{ $checkout->symbole}}{{ $checkout->fee ?? '0'}}</td>
                    <td>{{ $checkout->coupon_rate ?? '0'}}</td>
                    <td>{{ $checkout->coupon_number ?? '0'}}</td>
                    <td>{{ $checkout->pay_type }}</td>
                    <td>{{ $checkout->status}}</td>
                    
                    {{-- <td>
                        <a href="{{ route('add-new-card.edit',$newproduct->id) }}" class="btn btn-primary mb-2">Edit</a>
                        <form action="{{ route('add-new-card.destroy',$newproduct->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

@endsection
