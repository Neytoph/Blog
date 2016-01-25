<html>
<head>
<title>My Form</title>
</head>
<body>
<?php echo form_open('admin/login'); ?>

<?php echo (empty($error_message))?'':'<li>'.$error_message.'</li>'; ?>
<h5>Username</h5>
<?php echo form_error('username'); ?>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />

<h5>Password</h5>
<?php echo form_error('password'); ?>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<div><input type="submit" name="submit" value="login" /></div>

</form>

</body>
</html>
