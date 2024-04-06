@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'Create Acount To User'}}@endsection
<div class="vh-100" style="background-color: black; background-size: cover; background-repeat: no-repeat; position: relative; min-height: 500px;">
    <a href="{{ route('color.index') }}" class="btn btn-primary">Show All</a>
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center vh-100">
            <div class="col-lg-8 col-md-12 align-self-center">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Add Color</h5>
                        <form action="{{ route('color.store') }}" method="post" id="createForm" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Color Code</label>
                                <input type="text" name="color_code[]" id="color_input" class="form-control" placeholder="Enter color code" onInput="updateColorPicker()">
                            </div>

                            <div class="mb-3">
                                <label for="selected_colors" class="form-label">Select Colors:</label>
                                <select name="selected_colors[0][]" class="form-select" multiple>
                                    @foreach($allColors as $color)
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Add a button to dynamically add more color blocks -->
                            <button type="button" class="btn btn-info" onclick="addColorBlock()">Add Color</button>

                            <button type="submit" class="btn btn-success">Add Color(s)</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function updateColorCode() {
        // Your existing JavaScript code for updating color code
    }

    function updateColorPicker() {
        // Your existing JavaScript code for updating color picker
    }

    function addColorBlock() {
        // Clone the first color block and append it to the form
        var clonedBlock = document.querySelector('.mb-3').cloneNode(true);

        // Increment the name attribute for the new block
        var currentIndex = document.querySelectorAll('.mb-3').length;
        clonedBlock.querySelectorAll('[name^="new_color"], [name^="color_code"], [name^="selected_colors"]').forEach(function(element) {
            element.name = element.name.replace('[0]', '[' + currentIndex + ']');
        });

        // Append the cloned block to the form
        document.getElementById('createForm').appendChild(clonedBlock);
    }
</script>
@endsection
