<?php echo form_open('proses/check_login',array('class' => 'form-signin'));?>
<h2 class="form-signin-heading">Please sign in</h2>
<?php echo form_input(array('type' => 'email','class' => 'form-control', 'placeholder' => 'Email Address', 'name' => 'email'));?>
<?php echo form_input(array('type' => 'password','class' => 'form-control', 'placeholder' => 'Password', 'name' => 'password'));?>
<?php echo form_submit(array('class' => 'btn btn-lg btn-primary btn-block','value' => 'Sign In'));?>
<?php echo form_close();?>