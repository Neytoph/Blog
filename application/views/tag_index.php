<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

   <title>my blog</title>
   <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
   <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10"style="padding-top:2%">
      <div class="row">
          <div class="col-xs-9">
            <ul class="nav nav-pills">
             <li><?php echo anchor("Articles/index","Home","")?></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/CodeIgniter-3.0.3/index.php/Tag/index">
                分类 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <?php foreach ($all_category as $key => $value): ?>
              <li><?php echo anchor("Category/show/{$value['id']}","{$value['category']}","")?></li>
             <?php endforeach ?>
             </ul>
             </li>
             <li class="active"><?php echo anchor("Tag/index","标签","")?></li>
             <li><?php echo anchor("","关于我","")?></li>
             </ul>
          </div>
           <div class="col-sm-3" style="float:right;margin-top:5px">
              <div class="input-group">
                 <input type="text" class="form-control">
                 <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                       Go!
                    </button>
                 </span>
              </div><!-- /input-group -->
           </div><!-- /.col-lg-6 -->
          
        </div>
        <div class="row">
          <hr>
        </div>
      </div>
      
    </div>
    
  <div class="row">
    <div class="col-sm-2" style="padding-top:20px">
    </div>
    <div class="col-sm-8" style="padding-top:20px">
      <center >
        <?php foreach ($data as $key => $value): ?>
            <?php echo anchor("/Tag/show/{$value['tag_name']}","<button type='button' class='btn btn-{$value['tag_button_type']} {$value['tag_size']}'>{$value['tag_name']}</button>","")?>
        <?php endforeach ?>
      </center>
    </div>
  </div>
</div>

</body>
</html>