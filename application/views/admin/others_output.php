<div class="col-sm-8  col-sm-offset-2">
   <table class="table table-hover">
      <thead >
         <tr>
            <th class="text-center">#</th>
            <th>文章</th>
            <th class="text-center"><input type="checkbox" value=""></th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $key => $value): ?>

            <tr>
               <th class="text-center col-sm-1"><?php echo $value['id']?></th>
               <td class="col-sm-5"><?php echo $value['title']?></td>
               <td class="text-center col-sm-2"><input type="checkbox" value=""></td>
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

