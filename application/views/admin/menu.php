<div class="menu">
    <div class="col-sm-10 col-sm-offset-1 "style="padding-top:2%">
      <div class="row">
          <div class="col-xs-12">
            <ul class="nav nav-pills">
             <li class="<?php echo $cur_title[0];?>"><?php echo anchor("Articles/index","首页","")?></li>
             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                文章 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","撰写文章","")?></li>
              <li ><?php echo anchor("Category/show/{$value['id']}","管理文章","")?></li>
             </ul>
             </li>

             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                分类 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","创建分类","")?></li>
              <li ><?php echo anchor("Category/show/{$value['id']}","管理分类","")?></li>
             </ul>
             </li>

             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                标签 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","创建标签","")?></li>
              <li ><?php echo anchor("Category/show/{$value['id']}","管理标签","")?></li>
             </ul>
             </li>

              <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                功能 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("Category/show/{$value['id']}","备份","")?></li>
             </ul>
             </li>
             
             <button type="button" class="btn btn-default btn-sm hidden-xs" data-toggle="modal" data-target="#myModal" style="float:right;margin-top:5px">
                <span class="glyphicon glyphicon-off"> </span>
              </button>'
             </ul>

          </div>
        </div>

        <div class="row">
          <hr>
        </div>

      </div>
      
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width:400px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">嘿</h4>
      </div>
      <div class="modal-body text-center">
        不再码点了？
      </div>
      <div class="modal-footer">
        <?php echo anchor('admin/Index/logout','<button type="button" class="btn btn-primary">是的，再见！</button>')?>
        <button type="button" class="btn btn-default" data-dismiss="modal">考虑下咯</button>
      </div>
    </div>
  </div>
</div>