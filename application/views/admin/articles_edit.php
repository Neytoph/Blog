
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
<script type="text/javascript" src="<?php echo base_url('/public/js/bootstrap-datetimepicker.js')?>"></script>
<script type="text/javascript">
  $(".form_datetime").datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    autoclose:true,
    todayHighlight: true,
  });
</script> 

