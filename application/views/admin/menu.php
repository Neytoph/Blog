<div class="menu">
    <div class="col-sm-10 col-sm-offset-1 "style="padding-top:2%">
      <div class="row">
          <div class="col-xs-12">
            <ul class="nav nav-pills">
             <li class="<?php echo $cur_title[0];?>"><?php echo anchor("admin/index","Home","")?></li>
             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                文章 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
              <li ><?php echo anchor("admin/Articles/edit","撰写文章","")?></li>
              <li ><?php echo anchor("admin/Articles/index","管理文章","")?></li>
             </ul>
             </li>             
             <li class="<?php echo $cur_title[2];?>"><?php echo anchor("admin/Category/index","分类","")?>
             <li class="<?php echo $cur_title[3];?>"><?php echo anchor("admin/Tag/index","标签","")?>
              <li class="dropdown <?php echo $cur_title[4];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                功能 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu dropdown-menu-right">
              <li ><?php echo anchor("admin/Others/back_up","备份","")?></li>
              <li ><?php echo anchor("admin/Others/change_password","修改密码","")?></li>
             </ul>
             </li>
             <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#myModal" style="float:right;margin-top:5px;color:#1780C7">
                <span class="glyphicon glyphicon-off"> </span>
              </button>
              <?php echo anchor("Articles/index",'<button type="button" class="btn btn-default btn-md"style="float:right;margin-top:5px;color:#1780C7">
                <span class="glyphicon glyphicon-home"></span>
              </button>',"")?>
             </ul>

          </div>
        </div>

        <div class="row">
          <hr style="border: none;height: 1px;background-color: #bbb;background-image: -webkit-linear-gradient(0deg, #EEE, #000, #EEE);">
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
        不再写点了？
      </div>
      <div class="modal-footer">
        <?php echo anchor('admin/Index/logout','<button type="button" class="btn btn-primary">是的，再见！</button>')?>
        <button type="button" class="btn btn-default" data-dismiss="modal">考虑下咯</button>
      </div>
    </div>
  </div>
</div>