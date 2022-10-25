<div class="modal" id="login_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <ul class="nav nav-pills m-1">
        <li>
          <a data-toggle="pill" href="#login" id="login_tab" class="btn text-primary">Login</a>
        </li>
        <li>
          <a data-toggle="pill" href="#register" class="btn">Register</a>
        </li>
      
      </ul>

        <!-- Modal body -->
        <div class="modal-body m-2 ml-4 mr-4 tab-content">
          <div id="login" class="tab-pane active">
            <?php require_once('login_form.php') ?>
          </div>
        <div id="register" class="tab-pane">
            <?php require_once('register_form.php') ?>
        </div>
          
      </div>
    </div>
  </div>
</div>