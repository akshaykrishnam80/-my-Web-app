<?php
$html ='';


$html .='<!--Login Form-->
<div class="auth-body">
<div class="pt-5 pb-5">

  <div class="col-md-4 ak-login-form">
    <div class="Login-name">
      <h2>Sign Up</h2></div>
    <div class="mb-3">
      <h5><label for="email" class="form-label">Username:</label></h5>
      <input type="email" class="form-control" id="email" placeholder="example@mail.com">
    </div>
    <div class="mb-3">
      <h5><label for="password" class="form-label">Password:</label></h5>
      <input type="password" class="form-control" id="password" placeholder="">
    </div>

    <button type="button" class="btn btn-danger" onclick="add_user()">Signup</button>

    


      <div class="alert alert-danger mt-2 d-none" role="alert">
        Password must be greater than 8 character
      </div>

    </div>
    </div>

  </div>
  </div>

    

  <!-- Login Form End -->';

  echo $html;
  
  ?>