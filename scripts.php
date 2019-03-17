
 <script type="text/javascript">
 

 	// To simulate fade in effect when page is loaded instead of the mundane sudden display of elements

$(document).ready(function() {
  $('.content').css('display', 'none');
  $('.content').stop().delay(100).fadeTo(1000,1);

  $('a.fade').click(function() {
    event.preventDefault();

    newLocation = this.href;
    $('.content').fadeOut(700, newPage);
  });

  function newPage() {
    window.location = newLocation;
  }
});



// <!-- logo in nav fades to small logo on scroll -->

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

// <!-- hide/show menu on mobile -->
    $(document).ready(function() {
        $('#showMenu').click(function() {
                $('.menu-open').fadeIn(500);
        });
        $('#hideMenu').click(function() {
                $('.menu-open').fadeOut(500);
        });
    }); 
    

</script>

