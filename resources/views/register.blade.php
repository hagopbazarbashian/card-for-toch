@extends('layout.app-shop')
@section('title'){{'Register'}}@endsection
@section('home')
<style>
    .full-height {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: black; /* Fallback for browsers that do not support gradients */
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./assets/images/pages/01.webp');
        background-size: cover;
        background-repeat: no-repeat;
    }
    .video-container {
        position: relative;
        width: 80%; /* Adjusts the size of the video to be smaller */
        max-width: 960px; /* Maximum size */
        overflow: hidden;
    }
    video {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: auto;
    }
    .user-login-card {
        position: relative; /* Adjust this to position your form over the video */
        width: 100%;
        max-width: 400px; /* Max width of the form */
        padding: 20px;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
        z-index: 2; /* Make sure the form is above the video */
    }
    label, a {
        color: #333;
        text-decoration: none;
    }
    input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
<div class="full-height">
    <div class="video-container">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('shop/assets/images/mainmotionn_1_mobile.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="user-login-card">
        <h4>Create Your Account</h4>
        <form>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="username">Username *</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password *</label>
            <input type="password" id="password" name="password" required>a

            <label for="confirm-password">Confirm Password *</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <input type="checkbox" required> I've read and accept the <a href="terms-of-use.html">terms & conditions*</a>
            <input type="submit" value="Sign Up">
        </form>
        <p>Already have an account? <a href="login.html">Login</a></p>
    </div>
</div>

@endsection
