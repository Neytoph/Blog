
    <div class="col-sm-2" style="padding-top:20px">
    </div>
    <div class="col-sm-8" style="padding-top:20px">
    <ol class="breadcrumb">
     <li class="active">分类</li>
     <li class="active"><?php echo $cur_category[0]['category']?></li>
    </ol>
        <?php foreach ($data as $key => $value): ?>
        
            <blockquote style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD;"><a href='<?php echo site_url("Articles/article/{$value["id"]}");?>'><h2><?php echo $value['title']?></h2></a><small>Someone famous in <cite title="Source Title">Source Title</cite></small></blockquote>
          
          <hr style="solid">
        <?php endforeach ?>
    </div>
