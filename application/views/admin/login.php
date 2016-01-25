<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>my blog</title>
   <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
   <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<?php echo form_open('admin/login'); ?>
<form class="form-horizontal">
	<div class="form-group col-sm-12" style="margin-top:15%">
	    
	    <center><label  style="padding-top:5px" class="col-sm-1 col-sm-offset-4 control-label">用户名</label></center>
	    <div class="col-sm-2">
	      <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
	    </div>
	    <?php echo form_error('username'); ?>
	</div>

	<div class="form-group col-sm-12" style="margin-top:2%">
		<center>	    <label style="padding-top:5px" class="col-sm-1 col-sm-offset-4 control-label">密码</label>
</center>
	    <div class="col-sm-2">
	      <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password">
	    </div>
	    <?php echo form_error('password'); ?>
	</div>
  <div class="form-group">
    <div class="col-sm-2 col-sm-offset-6" style="margin-top:1%">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

</body>
</html>
