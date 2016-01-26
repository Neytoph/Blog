
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

                <?php $category_id = $value['category'];$category_name = $all_category["$category_id"]['category'];?>
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