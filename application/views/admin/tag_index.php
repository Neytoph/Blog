<div class="col-sm-8  col-sm-offset-2">
   <table class="table table-hover">
      <thead >
         <tr>
            <th class="text-center">#</th>
            <th class="text-center">标签</th>
            <th class="text-center">操作</th>
         </tr>

      </thead>
      <tbody>
         <tr>
            <form role="form" method="post" action="<?php echo site_url('admin/Tag/add')?>">
            <th class="text-center">#</th>
            <td class="text-center"><center><input type="text" class="form-control" id="name" name="tag_name" placeholder="请输入标签" style="width: 100px;"></center></td>
            <td class="text-center"><button type="submit" class="btn btn-success btn-md"><span class="glyphicon glyphicon glyphicon-plus">添加标签</span></button></td>
            </form>
         </tr>
         <?php foreach ($data as $key => $value): ?>
            <tr>
               <th class="text-center col-sm-1"><?php echo $value['id']?></th>
               <td class="text-center col-sm-5"><button type='button' class='btn btn-<?php echo $value['tag_button_type']?> btn-xs'><?php echo $value['tag_name']?></button></td>
               <td class="text-center col-sm-2">    
               <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal-<?php echo $value['id']?>"><span class="glyphicon glyphicon-remove">删除</span></button></a>
               </td>
            </tr>
            <!-- Modal -->
            <div class="modal fade" id='myModal-<?php echo $value['id']?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document" style="width:400px">
                <div class="modal-content">
                  <div class="modal-header">
                  </div>
                  <div class="modal-body text-center">
                   确定删除标签<p>【<?php echo $value['tag_name']?>】?</p>
                  </div>
                  <div class="modal-footer">

                    <a href="<?php echo site_url("admin/Tag/delete/{$value['id']}")?>"><button type="button" class="btn btn-default">确定</button></a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">考虑下咯</button>
                  </div>
                </div>
              </div>
            </div>

         <?php endforeach ?>
      </tbody>
   </table>
         <center>
        <ul class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </ul>
      </center>
</div>
