<?php
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\MarkdownExtra;

# Read file and pass content through the Markdown parser
$html = MarkdownExtra::defaultTransform($article[0]['content']);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>my blog</title>
   <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo base_url('/public/css/github-markdown.css')?>">
   <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
   <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
   <style>
    .markdown-body {
        box-sizing: border-box;
        min-width: 200px;
        max-width: 980px;
        margin: 0 auto;
        padding: 45px;
    }
   </style>
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
              <?php foreach ($all_category as $key => $value): ?>
              <li><?php echo anchor("Category/show/{$value['id']}","{$value['category']}","")?></li>
             <?php endforeach ?>
             </ul>
             </li>
             <li><?php echo anchor("Tag/index","标签","")?></li>
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
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
      <h1 class="text-center">
        <?php echo $article[0]['title'];?>
      </h1>
      <center>
        <p>
          <small class="text-muted">
            <?php $category_id = $article[0]['category'];$category_name = $category["$category_id"]['category'];?>
                分类于&nbsp<?php echo anchor("Category/show/{$category_id}","$category_name","")?> &nbsp&nbsp|&nbsp&nbsp<?php echo date('Y年m月d日',strtotime($article[0]['time']));?>&nbsp&nbsp|&nbsp&nbsp阅读人次：27次
          </small>
        </p>
        <?php if(isset($article[0]['tag'])):?>
          <?php foreach ($article[0]['tag'] as $key => $value):?>
            <?php echo anchor("/Tag/show/{$value}","<button type='button' class='btn btn-{$button_type["$value"]} btn-xs'>{$value}</button>","");?>
          <?php endforeach?>
        <?php endif?>
      </center>
    </div>     
  </div>
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10" style="padding-top:20px;">
      <article class="markdown-body">
        <?php echo $html; ?>
      </article>
    </div>
  </div>
</div>

</body>

</html>
