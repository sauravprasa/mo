<?php include "includes/db.php"?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cars</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/styles.css">
	
	<script src="js/jquery.js"></script>
	<script src="js/lightbox.js"></script> 
	<script src="js/bootstrap.js"></script>
	<style>
			.btn {
				font-size: 40px;
				height: 70px;
			}
		</style>
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<br>
		<div class="container">
			<div class="row">
			<?php
				if(isset($_GET['category'] )){
					
					$sql="SELECT * FROM items WHERE item_cat='$_GET[category]' ";
					$run=mysqli_query($conn,$sql);
					while($rows=mysqli_fetch_assoc($run)){
						$discounted_price = $rows['item_price'] - $rows['item_discount'];
						$item_title=str_replace(' ','-',$rows['item_title']);
						echo "
							<div class='col-md-3'>
							<div class='col-md-12  single-item noPadding'>
							<div class='top'><img src='$rows[item_image]'></div>
							<div class='bottom'>
							<h3 class='item-title'><a href='item.php?item_tite=$item_title & item_id=$rows[item_id]'>$rows[item_title]</a></h3>
							<div class='pull-right cutted-price text-muted'><del>$rows[item_price]/=</del></div>
							<div class='clearfix'></div>
							<div class='pull-right discounted-price'>$discounted_price/=</div>
							</div>
						</div>
					</div>
					";
					}
				}
			?>
		</div><div class="clearfix"></div>
		<!--<?php include 'includes/footer.php'; ?>-->
</body>
</html>