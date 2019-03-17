<script>
$(window).scroll(function (){
    var scrollTop = $(this).scrollTop();
    
    $('.default').hide();
      if( scrollTop < 50 ){
      	$('#small-logo').fadeOut().delay(50);
        $('#large-logo').fadeIn();
      } else if( scrollTop > 50 ) {
        $('#large-logo').fadeOut().delay(50);
        $('#small-logo').fadeIn();
      } else  {
         $('#large-logo').show();
      }
});
</script>