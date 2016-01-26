<div class="menu">
    <div class="col-sm-10 col-sm-offset-1 "style="padding-top:2%">
      <div class="row">
          <div class="col-xs-9">
            <ul class="nav nav-pills">
             <li class="<?php echo $cur_title[0];?>"><?php echo anchor("Articles/index","Home","")?></li>
             <li class="dropdown <?php echo $cur_title[1];?>">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                分类 <span class="caret"></span>
              </a>
             <ul class="dropdown-menu">
             <?php foreach ($all_category as $key => $value): ?>
              <li ><?php echo anchor("Category/show/{$value['id']}","{$value['category']}","")?></li>
             <?php endforeach ?>
             </ul>
             </li>
             <li class="<?php echo $cur_title[2];?>"><?php echo anchor("Tag/index","标签","")?></li>
             <li class="<?php echo $cur_title[3];?>"><?php echo anchor("admin/Login/index","关于我","")?></li>
             <?php echo anchor("admin/Login/index",'<button type="button" class="btn btn-default hidden-xs btn-sm" style="margin-top:5px">
                <span class="glyphicon glyphicon-user"> </span>
              </button>',"")?>
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
    