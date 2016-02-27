<div class="col-sm-8  col-sm-offset-2 col-xs-10 col-xs-offset-1" style="background-color: #FFF;border-radius: 8px;box-shadow:5px 5px 8px #DDDDDD,-5px -5px 8px #DDDDDD;">
   <table class="table table-hover" style="margin-top:20px;margin-bottom:-15px">
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

