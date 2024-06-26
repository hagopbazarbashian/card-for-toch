<style>
    *{
   box-sizing: border-box;
   font-family: "Merriweather Sans", sans-serif;
}

body{
   background-color: #B0DBEE;
   
   #form{
      color: white;
      background-color: #009EDF;
      border-radius: 5px;
      
      width: 400px;
      padding: 40px;
      margin: 150px auto;
      
      -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.75);
      
      p{
         font-size: 0.9em;
      }
      
      button{
         width: 100%;
         text-align: center;
         color: grey;
         margin-top: 20px;
         border: 1px solid rgba(0,0,0,0.4);
      }
      
      .form-group{
         margin: 15px auto;
           
         label{
            font-weight: bold;
            font-size: 0.9em;
         }
         
         .input-group{
            border-radius: 5px;
            -webkit-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            -moz-box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            box-shadow: -1px 3px 18px 0px rgba(0,0,0,0.35);
            
            .input-group-addon{
               border: none;
               border-right: 1px solid rgba(0,0,0,0.2);
            }
            
            input{
               padding-left: 10px;
            }
            
            i{
               color: #009EDF;
            }
         }
         
         input{
            padding: 3px;
            width: 100%;
            border: none;
            border-radius: 0 5px 5px 0;
         }
      }
   }
}
</style>
<form id="form">
    <p>Sign up once and watch our free things.</p>
 
    <div class="form-group">
       <label for="name">Your Name</label>
       <br />
       <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i>            </div>
          <input type="text" id="name" placeholder="Enter Your Name"/>
          </div>
       </div>
    
    <div class="form-group">
       <label for="email">Your Email</label>
       <br />
       <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true">            </i></div>
          <input type="email" id="email" placeholder="Enter Your Email"/>
          </div>
       </div>
    </div>
    
    <div class="form-group">
       <label for="username">Your Username</label>
       <br />
       <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i>            </div>
          <input type="text" id="username" placeholder="Enter Your Username"/>
          </div>
       </div>
    </div>
    
    <div class="form-group">
       <label for="password">Your Password</label>
       <br />
       <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i>            </div>
          <input type="text" id="password" placeholder="Enter Your Password"/>
          </div>
       </div>
    </div>
    
    <div class="form-group">
       <label for="password-confirm">Confirm Your Password</label>
       <br />
       <div class="input-group">
          <div class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i>            </div>
          <input type="text" id="password-confirm" placeholder="Confirm Your Password"/>
          </div>
       </div>
    </div>
    
    <button type="submit" class="btn btn-default">Register</button>
 </form>