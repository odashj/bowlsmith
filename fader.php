<!-- fader.php
 -->	


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


 </script>
