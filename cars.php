<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cars</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/styles.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/lightbox.js"></script> 
	<script src="js/bootstrap.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <style>
	#myBtn {
	  display: none;
	  position: fixed;
	  bottom: 20px;
	  right: 10px;
	  z-index: 99;
	  margin-bottom:60px;
	  border: none;
	  outline: none;
	  background-color: #33eae1;
	  color: white;
	  cursor: pointer;
	  padding: 15px;
	  border-radius: 10px;
	}

	#myBtn:hover {
	  background-color:#e2067b;
	}
	
</style>
</head>
<body>
<button onclick="topFunction()"  class="jumper" id="myBtn" title="Go to top" ><b>Move to Top</b></button>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


$(document).ready(function() {
  $(".jumper").on("click", function( e ) {

    e.preventDefault();

    $("body, html").animate({ 
      scrollTop: $( $(this).attr('href') ).offset().top 
    }, 600);

  });
});
</script>
<?php include 'includes/header.php'; ?>
	<div class="container-fluid do slideanim"><br><br><br>
		
		<div class="row">
			<h2>Android Phones</h2><br>
				<div class="col-sm-5">
					<p>The i8 is the flagship electric plug-in hybrid supercar from BMW and is officially available (in limited numbers) for customers in India. 
						 it is the first hybrid supercar to be officially launched in India.
					</p>
					
					<br>
					<ul>
						<li>Cost Rs.2.14Cr </li>
						<li>Engin 1499cc</li>
						<li>Mileage 47.55k</li>
						<li>Turo Charger</li>
					</ul>
					 <center><a href="aboutus.html"<br><button class="btn btn-success btn-lg">Know More</button></a></center>
				</div>
				<div class="col-sm-7">
					<span><img src="images/img11.jpg" style="width:700px; float:right; margin:-70px 0;"></span>
					<!--<span class="glyphicon glyphicon-grain logo"></span>-->
				</div>
		</div>
	</div><br><br><br><br>
	<div  class="container-fluid a slideanim">
		<div class="col-md-4">
			<a href="images/img9.jpg" data-lightbox="gallery" data-title=" " class="thumbnail">
				<img src="images/img9.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img10.jpg" data-lightbox="gallery" data-title="Lambo-asterion" class="thumbnail">
				<img src="images/img10.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img2.jpg" data-lightbox="gallery" data-title="panamera turismo" class="thumbnail" data-toggle="collapse">
				<img src="images/img2.jpg" class="img-responsive">
			</a>
		</div>
	
	</div><br>

	<div class="container-fluid do"><br><br><br>
		
		<div class="row">
			<div class="col-sm-7">
					<span><img src="images/img13.jpg" style="width:700px; float:left; margin:-70px 0;"></span>
					<!--<span class="glyphicon glyphicon-grain logo"></span>-->
				</div>
				<div class="col-sm-5" style="background-color:#F0F0F0;">
					<h2>Powerfull Engines</h2>
					<h3>3.0 LITRE V6 300PS TWIN TURBOCHARGED DIESEL</h3>
					<p>The 3.0 litre V6 Twin Turbocharged Diesel engine offers exceptional power, torque and drivability. 
						It uses innovative twin-parallel sequential turbocharging – a concept pioneered by Jaguar Land Rover – 
						for smooth, more immediate delivery of power at all engine speeds, as well as two-stage water cooling to conserve energy.
					</p>
					
					<br>
				</div>
				
		</div>
	</div><br><br><br><br>
	<div  class="container-fluid slideanim a">
		<div class="col-md-4">
			<a href="images/img14.jpg" data-lightbox="gallery" data-title=" " class="thumbnail">
				<img src="images/img14.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img15.jpg" data-lightbox="gallery" data-title="Lambo-asterion" class="thumbnail">
				<img src="images/img15.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/img16.jpg" data-lightbox="gallery" data-title="panamera turismo" class="thumbnail" data-toggle="collapse">
				<img src="images/img16.jpg" class="img-responsive">
			</a>
		</div>
	
	</div><br>
	
	<div class="container-fluid do"><br><br><br>
		
		<div class="row">
				<div class="col-sm-5" style="background-color:#F0F0F0;">
					<h2>Rims</h2>
					<h3>Metal Alloys</h3>
					<p>Color: painted | size: 15 inches x 7 inches | configuration: 4 holes x 156 mm pitch circle diameter x 10 mm 
					item offset x 4. 375 inches wheel backspacing he m12 diesel atv wheel by motosport alloys is a flawless design 
					that has taken the atv and utv industry by storm. Arguably one of the best looking styles of all-time, the m12 
					is also very functional, utilizing our industry first msa bolt-on cap and backed by a lifetime structural warranty. 
					Want to mix your wheels up and have black caps on your black diesel wheels? visit our online store and pick up an 
					optional set of black msa caps forplete custom look.
					</p>
					
					<br>
				</div>
				<div class="col-sm-7">
					<span><img src="images/rim1.jpg" style="width:700px; float:left; margin:-70px 0; height:500px;"></span>
					<!--<span class="glyphicon glyphicon-grain logo"></span>-->
				</div>
		</div>
	</div><br><br><br><br>
	
	<div  class="container-fluid slidanimes a">
		<div class="col-md-4">
			<a href="images/rim2.jpg" data-lightbox="gallery" data-title=" " class="thumbnail">
				<img src="images/rim2.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/rim3.jpg" data-lightbox="gallery" data-title="Lambo-asterion" class="thumbnail">
				<img src="images/rim3.jpg" class="img-responsive">
			</a>
		</div>
		<div class="col-md-4">
			<a href="images/rim4.jpg" data-lightbox="gallery" data-title="panamera turismo" class="thumbnail" data-toggle="collapse">
				<img src="images/rim4.jpg" class="img-responsive">
			</a>
		</div>
</div>

<div class="container fluid" id="contactus" 
	style="
    background-image: url('images/img1.jpg');
    min-height:500px; 
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
">
	
 	 <div class="page-header">
			
			<h2><i class="fa fa-mobile " aria-hidden="true"  ></i><b>   Contact Us</b></h2>
		</div>
	<form class="col-md-6 col-md-offset-3" method="post" >
	<div class="form-group">
	<label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Full Name" required>	
	</div>
	<div class="form-group">
	<label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" required>	
	</div>
	<div class="form-group">
	<label>Contact Number</label>
    <input type="text" class="form-control" name="contact_number" placeholder="Phone Number" required>	
	</div>
	<div class="form-group">
	<label>Comments or Query</label>
    <textarea type="text" class="form-control" name="query" rows="10" style="resize:none;" placeholder="Comments" required></textarea>	
	</div>
	<div class="form-group">
    <input type="submit" class="btn btn-danger btn-block" name="submit_user">	
	</div>
	
	<div class="address col-md-15" style="color:black;" >
					
				<h3><span class="glyphicon glyphicon-map-marker"></span>Address:</h3>
				<p><h3>Andy Shoppers</h3> 
				<h4>Hanish Goel(Partner) No.37,Sango Sohal</h4>
				<h4>Wariana Industrial Complex</h4>
				<h4>Jalandhar-144013,Punjab,India</h4></p>
			</div><br><br><br>
	</form>
	
	
	</div>
	<br><br><br><br>
<?php include 'includes/footer.php'; ?>
</body>
</html>