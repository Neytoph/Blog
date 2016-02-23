<?php
spl_autoload_register(function($class){
  require preg_replace('{\\\\|_(?!.*\\\\)}', DIRECTORY_SEPARATOR, ltrim($class, '\\')).'.php';
});

# Get Markdown class
use \Michelf\MarkdownExtra;

# Read file and pass content through the Markdown parser
$html = MarkdownExtra::defaultTransform($article[0]['content']);


?>
  <div class="col-sm-8 col-sm-offset-2" style="background-color: #FFF;margin-top:20px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD;">
    <div class="col-sm-12">
      <h1 class="text-center">
        <?php echo $article[0]['title'];?>
      </h1>
      <center>
        <p>
          <small class="text-muted">
            <?php $category_id = $article[0]['category'];$category_name = $all_category["$category_id"]['category'];?>
                分类于&nbsp<?php echo anchor("Category/show/{$category_id}","$category_name","")?> &nbsp&nbsp|&nbsp&nbsp<?php echo date('Y年m月d日',strtotime($article[0]['published_at']));?>&nbsp&nbsp|&nbsp&nbsp阅读人次：27次
          </small>
        </p>
        <?php if(isset($article[0]['tag'])):?>
          <?php foreach ($article[0]['tag'] as $key => $value):?>
            <?php echo anchor("/Tag/show/{$value}","<button type='button' class='btn btn-{$button_type["$value"]} btn-xs'>{$value}</button>","");?>
          <?php endforeach?>
        <?php endif?>
        <hr>
        </center>
        <article class="markdown-body">
          <?php echo $html; ?>
        </article>
    </div>     
  </div>

