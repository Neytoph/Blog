
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
      <hr>
      <h4 class="text-center" style="margin-bottom:50px">
        <small>power by neytoph</small>
      </h4>
    </div>     
  </div>
</div>
<script>
 function centerModals(){
    $('.modal').each(function(i){
        var $clone = $(this).clone().css('display', 'block').appendTo('body');    var top = Math.round(($clone.height() - $clone.find('.modal-content').height()) / 2);
        top = top > 0 ? top : 0;
        $clone.remove();
        $(this).find('.modal-content').css("margin-top", top);
    });
}
$('.modal').on('show.bs.modal', centerModals);
$(window).on('resize', centerModals);
</script>
</body>

</html>
