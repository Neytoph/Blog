<div class="col-sm-8  col-sm-offset-2">
   <table class="table table-hover">
      <thead >
         <tr>
            <th class="text-center">#</th>
            <th>文章</th>
            <th class="text-center">操作</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $key => $value): ?>
            <tr>
               <th class="text-center col-sm-1"><?php echo $value['id']?></th>
               <td class="col-sm-5"><?php echo $value['title']?></td>
               <td class="text-center col-sm-2">
                  <?php echo anchor("admin/Articles/edit/{$value['id']}",'<span class="glyphicon glyphicon-pencil">编辑</span>',"")?>
                  <?php echo anchor("admin/Articles/delete/{$value['id']}",'<span class="glyphicon glyphicon-remove">删除</span>',"")?>        
               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
         <center>
        <ul class="pagination">
          <?php echo $this->pagination->create_links(); ?>
        </ul>
      </center>
</div>