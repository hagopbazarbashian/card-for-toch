@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'Create Additional Photo'}}@endsection

<style>
/* Existing CSS */
.imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;
    background: url(http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg);
    background-color: #fff;
    background-size: cover;
    background-repeat: no-repeat;
    display: inline-block;
    box-shadow: 0px -3px 6px 2px rgba(0, 0, 0, 0.2);
}

.btn-primary {
    display: block;
    border-radius: 0px;
    box-shadow: 0px 4px 6px 2px rgba(0, 0, 0, 0.2);
    margin-top: -5px;
}

.imgUp {
    margin-bottom: 15px;
}

.del {
    position: absolute;
    top: 0px;
    right: 15px;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    background-color: rgba(255, 255, 255, 0.6);
    cursor: pointer;
}

.imgAdd {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #4bd7ef;
    color: #fff;
    box-shadow: 0px 0px 2px 1px rgba(0, 0, 0, 0.2);
    text-align: center;
    line-height: 30px;
    margin-top: 0px;
    cursor: pointer;
    font-size: 15px;
}

.custom-select-container {
    position: relative;
    width: 100%;
}

.selected-option {
    background: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.options-container {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: #fff;
    border: 1px solid #ccc;
    z-index: 1000;
    max-height: 200px;
    overflow-y: auto;
}

.option {
    padding: 10px;
    display: flex;
    align-items: center;
    cursor: pointer;
}

.option:hover {
    background: #f0f0f0;
}

.option-img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: 4px;
    object-fit: cover;
}

.selected-option img {
    width: 40px;
    height: 40px;
    margin-right: 10px;
    border-radius: 4px;
    object-fit: cover;
}

.show {
    display: block;
}
</style>

<div class="vh-100" style="background-color: black; background-size: cover; background-repeat: no-repeat; position: relative; min-height: 500px;">
    <a href="{{ route('admin-additional-photo.index') }}"><button class="btn btn-primary">Show All</button></a>
    <div class="container">
        <div class="row justify-content-center align-items-center height-self-center vh-100">
            <div class="col-lg-8 col-md-12 align-self-center">
                <form action="{{ route('admin-additional-photo.store') }}" method="post" id="createForm" enctype="multipart/form-data">
                    @csrf
                    <div class="user-login-card bg-body">
                        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Photos</label>
                                <input type="file" name="photo" class="form-control rounded-0" multiple />
                            </div>
                            <div class="col">
                                <label class="text-white fw-500 mb-2">Wich Card</label>
                                <div class="custom-select-container">
                                    <div class="selected-option">
                                        <span>Select Card</span>
                                    </div>
                                    <div class="options-container">
                                       
                                        @foreach ($newproducts as $newproduct)
                                            <div class="option" data-value="{{ $newproduct->id }}">
                                                <img src="{{ asset('productimages/'.$newproduct->photo) }}" class="option-img" alt="Product Image">
                                                <span>{{ $newproduct->title }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <input type="hidden" name="new_product_id" class="selected-category" />
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="full-button">
                                    <div class="iq-button">
                                        <button type="button" class="btn text-uppercase position-relative" onclick="submitForm()">
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectedOption = document.querySelector('.selected-option');
    const optionsContainer = document.querySelector('.options-container');
    const optionsList = document.querySelectorAll('.option');
    const selectedCategoryInput = document.querySelector('.selected-category');

    selectedOption.addEventListener('click', function(e) {
        e.stopPropagation();
        optionsContainer.classList.toggle('show');
    });

    optionsList.forEach(option => {
        option.addEventListener('click', function(e) {
            const value = this.getAttribute('data-value');
            const imgSrc = this.querySelector('img').getAttribute('src');
            const text = this.querySelector('span').textContent;
            selectedOption.innerHTML = `<img src="${imgSrc}" class="option-img" alt="Category Image"><span>${text}</span>`;
            selectedCategoryInput.value = value;
            optionsContainer.classList.remove('show');
        });
    });

    document.addEventListener('click', function(e) {
        if (!selectedOption.contains(e.target) && !optionsContainer.contains(e.target)) {
            optionsContainer.classList.remove('show');
        }
    });
});

function submitForm() {
    document.getElementById('createForm').submit();
}
</script>
@endsection
