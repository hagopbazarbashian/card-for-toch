@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'Create Acount To User'}}@endsection
<div class="vh-100" style="background-color:black; background-size: cover; background-repeat: no-repeat; position: relative; min-height: 500px;">
    <div class="container">
       <div class="row justify-content-center align-items-center height-self-center vh-100">
          <div class="col-lg-8 col-md-12 align-self-center">
             <form action="{{ route('create-acount.store') }}" method="post">
               @csrf
                <div class="user-login-card bg-body">
                   <div class="text-center mb-5">
                     <!--Logo -->
                    <div class="logo-default">
                        <a class="navbar-brand text-primary" href="{{route('welcome')}}">
                            <img class="img-fluid logo log" src="{{ asset('/assets/images/logo.png') }}" loading="lazy" alt="streamit" />
                            <p style="color:#fff">ALWAYS IN TOUCH</p>
                        </a>
                    </div>
                   </div>
                   <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-5">
                      <div class="col">
                         <label class="text-white fw-500 mb-2">First Name</label>
                         <input type="text" name="name" class="form-control rounded-0" value="{{ old('name') }}" />
                      </div>
                      <div class="col">
                        <label class="text-white fw-500 mb-2">Email *</label>
                        <input type="email" name="email" id="randomEmail" class="form-control rounded-0" value="" />
                     </div>
                     <div class="col">
                        <label class="text-white fw-500 mb-2">Password *</label>
                        <input type="text" name="password" id="password" class="form-control rounded-0" value="" />
                    </div>
                    <div class="col">
                        <label class="text-white fw-500 mb-2">Confirm Password *</label>
                        <input type="text" name="re-password" id="re-password" class="form-control rounded-0" value="" />
                    </div>
                   </div>
                   <label class="list-group-item d-flex align-items-center mt-5 mb-3 text-white">
                      <input class="form-check-input m-0 me-2" name="chek" type="checkbox" />I've read and accept the <a style="color: #68b7e2 !important" href="#" class="ms-1">terms & conditions*</a>
                   </label>
                   <div class="row text-center">
                      <div class="col-lg-3"></div>
                      <div class="col-lg-6">
                         <div class="full-button">
                            <div class="iq-button">
                               <button type="submit" class="btn text-uppercase position-relative">
                                  <span class="button-text">Sign Up</span>
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
 <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script>
   // Register Page Submit submitButton
   $(document).ready(function() {
        // Disable submit button on page load
        $('button[type="submit"]').prop('disabled', true);

        // Enable or disable submit button based on checkbox state
        $('input[name="chek"]').on('change', function() {
            var isChecked = $(this).prop('checked');
            $('button[type="submit"]').prop('disabled', !isChecked);
        });
    });
 </script>
<script>
    window.onload = function() {
        generateRandomPassword();
        generateRandomEmail();
    };

    function generateRandomPassword() {
        var passwordLength = 10; // Adjust the length of the password as needed
        var password = generateRandomString(passwordLength, 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz');

        // Set the generated password in both password and confirm password fields
        var passwordInput = document.getElementById('password');
        var rePasswordInput = document.getElementById('re-password');

        if (passwordInput && rePasswordInput) {
            passwordInput.value = password;
            rePasswordInput.value = password;
        }
    }

    function generateRandomEmail() {
        // Generate a random string for the local part of the email
        var randomString = generateRandomString(10, 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'); // Adjust the length as needed

        // Concatenate the local part with a domain
        var email = randomString + '@toch.am'; // Change 'example.com' to your desired domain

        // Set the generated email as the input value
        var emailInput = document.getElementById('randomEmail');

        if (emailInput) {
            emailInput.value = email;
        }
    }

    function generateRandomString(length, characters) {
        var result = '';
        var charactersLength = characters.length;

        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        return result;
    }
</script>

@endsection
