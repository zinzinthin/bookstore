<form id="register" class="needs-validation" novalidate method="post" action="register_process.php">
    <div class="form-group">
    <input type="text" name="name" id="username" tabindex="1" class="form-control" placeholder="Name" value="" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
    <input type="email" name="email" id="useremail" tabindex="2" class="form-control" placeholder="Email" value="" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
    <input type="password" name="password" id="password" tabindex="3" class="form-control" placeholder="Password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Password must be at least 8 characters.</div>
    </div>

    <div class="form-group">
    <input type="password" name="cfm_password" id="cfm_password" tabindex="4" class="form-control" placeholder="Confirm Password" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Password and Confirm password must  be the same.</div>
    </div>

    <div class="form-group text-dark">
    <input type="checkbox" required>
    <label for="remember">I agree on service and privacy policy.</label>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Required to agree our team.</div>
    </div>

    <div class="form-group bg-success ml-5 mr-5">              
    <input type="submit" name="register_submit" id="register_submit" tabindex="6" class="form-control btn-success text-white" value="Sign Up">
    </div>

</form>

<!-- <script type="text/javascript">
$(document).ready(function(){

    $('#register_submit').click(function(){
        
    $.ajax({
      type: "POST",
      url: 'register_process.php',

      success: function(data) {
        $('.register-message').html(data);
    },

      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }

    });

    return false;
});
});
</script> -->