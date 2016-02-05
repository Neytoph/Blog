
  <form role="form">
    <div class="col-sm-6  col-sm-offset-2">
      <div class="form-group">
        <label for="name">标题</label>
        <input type="text" class="form-control" id="name" 
           placeholder="请输入标题" value="<?php if(isset($article['0']['title'])) echo $article['0']['title']?>">
      </div>
      <div class="form-group">
        <label for="content">内容</label>
        <textarea class="form-control" rows="15" placeholder="请输入内容" value="<?php if(isset($article['0']['content'])) echo $article['0']['content']?>"></textarea>
      </div>
      <center>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">写完了！</button>
      </center>

    </div>

    <div class="col-sm-2">
      <div class="form-group">
          <label for="published_at">发布日期</label>
          <input type="text" class=" form_datetime form-control" value="<?php echo date('Y-m-d h:i')?>">
      </div>
      <div class="form-group">
        <label for="category">分类</label>
        <select class="form-control">
          <?php foreach ($all_category as $key => $value): ?>
            <option  <?php if(isset($article['0']['category'])) echo $value['id']==$article['0']['category']?'selected':'' ?>><?php echo $value['category']?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label for="tag">标签</label>
        <input type="text" class="form-control" id="name" 
           placeholder="请输入标签" value="<?php if(isset($article['0']['tag'])) echo $article['0']['tag']?>">
        <span class="help-block">标签请用英文“,”分离</span>
      </div>

    </div>
    
  </form>


<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width:400px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">嘿</h4>
      </div>
      <div class="modal-body text-center">
        搞定了？
      </div>
      <div class="modal-footer">
        <?php echo anchor('admin/Index/logout','<button type="button" class="btn btn-primary">赶紧提交！</button>')?>
        <button type="button" class="btn btn-default" data-dismiss="modal">我再想想</button>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="<?php echo base_url('/public/js/bootstrap-datetimepicker.js')?>"></script>
<script type="text/javascript">
  $(".form_datetime").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose:true,
    todayHighlight: true,
  });

</script> 

