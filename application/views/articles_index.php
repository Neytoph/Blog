<!DOCTYPE html>
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
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10"style="padding-top:2%">
      <div class="row">
          <div class="col-xs-9">
            <ul class="nav nav-pills">
             <li class="active"><?php echo anchor("Articles/index","Home","")?></li>
             <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="http://localhost/CodeIgniter-3.0.3/index.php/Tag/index">
                分类 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
             <?php foreach ($category as $key => $value): ?>
              <li><?php echo anchor("Category/show/{$value['id']}","{$value['category']}","")?></li>
             <?php endforeach ?>
             
             </ul>
             </li>
             <li><?php echo anchor("Tag/index","标签","")?></li>
             <li><?php echo anchor("admin/Login/index","关于我","")?></li>
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
      <?php foreach ($data as $key => $value): ?>
        <div class="article">
          <h1 class="text-center">
            <?php echo anchor("/Articles/article/{$value['id']}","{$value['title']}","")?>
          </h1>
          <center>
            <p>
              <small class="text-muted">
                <?php $category_id = $value['category'];$category_name = $category["$category_id"]['category'];?>
                分类于&nbsp<?php echo anchor("Category/show/{$category_id}","$category_name","")?> &nbsp&nbsp|&nbsp&nbsp<?php echo date('Y年m月d日',strtotime($value['time']));?>&nbsp&nbsp|&nbsp&nbsp阅读人次：27次
              </small>
            </p>
          </center>
          <p class="text-center" style="margin-top:20px"><?php echo $value['content']; ?></p>
          <center style="margin-bottom:50px;margin-top:20px">
            <a href="<?php echo site_url("/articles/article/{$value['id']}")?>">
              <button type="button" class="btn btn-success" >阅读全文</button>
            </a>
          </center>
          <hr>
        </div>
      <?php endforeach ?>
      <center>
        <ul class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </ul>
      </center>
    </div>
  </div>
</div>

</body>

</html>