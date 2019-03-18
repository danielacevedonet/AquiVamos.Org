<!-- fonts -->
<script src="https://use.fontawesome.com/32f18c768f.js"></script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>          
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.tabs').tabs();
	$('.modal-trigger').leanModal();
    $('select').material_select();

    // for HTML5 "required" attribute
    $("select[required]").css({
      display: "inline",
      height: 1,
      padding: 0,
      width: 0
    });	  
  });
</script> 