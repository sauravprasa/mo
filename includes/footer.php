<div class=" row footer text-center navbar-fixed-bottom" >
		<div class="col-md-4" ><center>Copyright &copy; 2017 ASSEMBLER Reserved</center></div>
		
		<div class=" col-md-3 pull-right">
		<a href="#"> <i class="fa fa-facebook-official pull-right fa-2x" aria-hidden="true" style="margin-right:20px"></i></a>
		<a href="#"><i class="fa fa-globe pull-right fa-2x" aria-hidden="true" style="margin-right:7px"></i></a> 
		<div class="pull-left findus"><b>Find Us on</b></div>
		
		</div>
		
		
</div>
<script>
		$(document).ready(function(){
			$(window).scroll(function() {
				$(".slideanim").each(function(){
				  var pos = $(this).offset().top;

				  var winTop = $(window).scrollTop();
					if (pos < winTop + 600) {
					  $(this).addClass("slide");
					}
				});
			});
		})
		
	</script>