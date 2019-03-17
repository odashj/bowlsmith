<script>
$(window).scroll(function (){
    var scrollTop = $(this).scrollTop();


      if( scrollTop < 1 ){
      	$('#small-logo').fadeOut(300, function() {
    $('#large-logo').fadeIn(300);
});
      } else if( scrollTop > 1 ) {
       $('#large-logo').fadeOut(300, function() {
    $('#small-logo').fadeIn(300);
});
      }
});

$(window).scroll(function (){
    var scrollTop = $(this).scrollTop();


      if( scrollTop < 1 ){
      	$('#small-logo-mobile').fadeOut(300, function() {
    $('#large-logo-mobile').fadeIn(300);
});
      } else if( scrollTop > 1 ) {
       $('#large-logo-mobile').fadeOut(300, function() {
    $('#small-logo-mobile').fadeIn(300);
});
      }
});


</script>

