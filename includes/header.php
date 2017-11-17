<?php include "includes/db.php"?>

	<nav class="navbar navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand" style="font-size:30px" id="header-top"><i class="fa fa-cog fa-spin fa-fw"></i>
					<span class="sr-only">Loading...</span>ASSEMBLER</a>
				</a>
			</div>
			<ul class="nav navbar-nav navbar-left" >
				<li><a  href="index.html" >Home</a></li>
				<li><a class="jumper" href="#product" >Our Product</a></li>
				<?php
				$cat_sql=	"SELECT * FROM item_cat";
				$cat_run=mysqli_query($conn,$cat_sql);
				while($cat_rows=mysqli_fetch_assoc($cat_run)){
					$cat_name=ucwords($cat_rows['cat_name']);
					if($cat_rows['cat_slug']==' '){
						$cat_slug = $cat_rows['cat_name'];
					}else{
						$cat_slug=$cat_rows['cat_slug'];
					}
					echo"<li><a href='category.php?category=$cat_slug'>$cat_rows[cat_name]</a></li>";
				}
				?>
			</ul>
			
		</div>
	</nav>
	<header id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/img5.jpg" alt="" style="width:100%; height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">ASSEMBLER </h3>
          <p class="prx">Connecting your life</p>
        </div>
      </div>

      <div class="item">
        <img src="images/img2.jpg" alt="" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">ASSEMBLER</h3>
          <p class="prx">Connecting your Life</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/img3.jpg" alt="" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">ASSEMBLER</h3>
          <p class="prx">Connecting your Life</p>
        </div>
      </div>
	   <div class="item">
        <img src="images/img6.jpg" alt="" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3 class="trx">ASSEMBLER</h3>
          <p class="prx">Connecting your Life</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header><br><br><br>