@extends('admin.layout.app')

@section('admin_home')
@section('title'){{'Edit Color'}}@endsection

<div class="vh-100" style="background-color: black; background-size: cover; background-repeat: no-repeat; position: relative; min-height: 500px;">
    <a href="{{ route('color.index') }}" class="btn btn-primary">Show All</a>
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center vh-100">
            <div class="col-lg-8 col-md-12 align-self-center">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Edit Color</h5>
                        <form action="{{ route('color.update', ['color' => $color->id]) }}" method="post" id="updateForm" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="name" class="form-label">Col or Code</label>
                                <input type="text" name="code" id="color_input" class="form-control" placeholder="Enter color code" value="{{ $color->code }}">
                            </div>

                            <!-- Display the color code -->
                            <div class="mb-3">
                                <label class="form-label">Current Color Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ $color->code }}" readonly>
                                    <div class="input-group-append">
                                        <span class="input-group-text" style="background-color: {{ $color->code }};"></span>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Update Color</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
