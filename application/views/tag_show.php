
    <div class="col-sm-2" style="padding-top:20px">
    </div>
    <div class="col-sm-8" style="padding-top:20px">
    <ol class="breadcrumb">
     <li><?php echo anchor("Tag/index","标签","")?></li>
     <li class="active"><?php echo $data[0]['tag_name']?></li>
    </ol>
        <?php foreach ($data as $key => $value): ?>
          
            
            <blockquote style="background-color: #FFF;margin-top:20px;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD;"><a href='<?php echo site_url("Articles/article/{$value["id"]}");?>'><h2><?php echo $value['title']?></h2></a><small>Someone famous in <cite title="Source Title">Source Title</cite></small></blockquote>
          
          <hr style="solid">
        <?php endforeach ?>
    </div>
