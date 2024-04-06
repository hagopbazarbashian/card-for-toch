@extends('layout.app')
@section('title'){{ 'Admin / Login' }}@endsection
@section('home')
<div class="container">
    <div class="row justify-content-center align-items-center height-self-center vh-100">
        <div class="col-lg-5 col-md-12 align-self-center">
            <div class="user-login-card bg-body">
                <div class="text-center">
                    <!--Logo -->
                    <div class="logo-default">
                        <a class="navbar-brand text-primary" href="#">
                           <h2>Admin Login Page</h2>
                        </a>
                    </div>
                </div>
                <form  method="post" action="{{route('login_submit')}}">
                  @csrf
                    <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Email Address</label>
                        <input type="email" name="email" class="form-control rounded-0">
                    </div>
                    <div class="mb-3">
                        <label class="text-white fw-500 mb-2">Password</label>
                        <input type="password" name="password" class="form-control rounded-0">
                    </div>
                    <div class="text-end mb-3">
                        <a href="reset-password.html" class="text-primary fw-semibold fst-italic">Forgot
                            Password?</a>
                    </div>
                    <label
                        class="list-group-item d-flex align-items-center mb-3 font-size-14 text-white fw-500"><input
                            class="form-check-input m-0 me-2" type="checkbox">Remember Me</label>
                            <div class="full-button">
                    <div class="iq-button">
                        <button type="submit" class="btn text-uppercase position-relative">
                             <span class="button-text">Log in</span>
                             <i class="fa-solid fa-play"></i>
                        </button>
                    </div>
                    </div>
                </form>
                
                
            </div>
        </div>
    </div>
</div><br><br><br>
@endsection
