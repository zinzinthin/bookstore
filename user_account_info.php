<div class="user-account">

	<h2>Your account</h2>

	<div id="logo"><img src="<?php echo $account['user_profile']; ?>"></div>

    <img src="src/image/edit2.png" id="edit_account">
    <button type="submit" name="action" id="save_account" value="save_account"><img src="src/image/save.png" title="Save"></button>
	<div id="user-detail">
		<p><label>User Id :</label>
		<input id="user-info" type='text'  name="user_id" value="<?php echo "00".$account['user_id']; ?>">	
		</p>
		<p><label>User Name :</label><input class="user-info" type='text'  name="user_name" value="<?php echo $account['user_name']; ?>"></p>
		<p><label>Phone No &nbsp;&nbsp;:</label><input type='text' name="user_phone" class="user-info" pattern='09[0-9]{9}' value="<?php echo $account['user_phone'];?>"></p>
		<p><label>Password &nbsp;&nbsp;:</label><input type='password' name="user_password" class="user-info" value="<?php echo $account['user_password']; ?>"></p>
		
	</div>
		
</div>