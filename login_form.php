<form action="login_process.php" class="needs-validation" novalidate  method="post">

    <div class="form-group">
    <input type="email" name="useremail" id="useremail" tabindex="1" class="form-control" placeholder="Email" value="" required>
    </div>

    <div class="form-group">
    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required>
    </div>

    <div class="form-group text-center text-dark">
    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
    <label for="remember">Remember Me</label>
    </div>

    <div class="form-group bg-success ml-5 mr-5">             
    <input type="submit" name="login_submit" id="login_submit" tabindex="4" class="form-control btn bg-success text-white" value="Log In">               
    </div>

    <div class="form-group">
    <div class="text-center">
    <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
    </div>
  </div>

</form>
