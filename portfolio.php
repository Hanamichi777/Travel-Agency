<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<a id="Top"></a>
	<div class="container">
		<div class="header">
			<div class="nav">
				<a href="index.php">
					<img src="images/dOMESTIC LOGO.png" alt="logo" class="logo1" >
				</a>
				<ul id="menu-items">
					
					<li><a href="home.php"> Home </a></li>
					<li><a href="about.php"> About Us </a></li>
					<li><a href="product.php"> Products </a></li>
					<li><a href="contact.php"> Contact Us </a></li>
					<li><a href="blog.php"> Blogs </a></li>
					<li><a href="favorite.php"> Favorite </a></li>
					<li class="cart"><a href="cart.php"> <ion-icon name="basket"></ion-icon>Cart</a></li>
					<li><a href="portfolio.php"> Portfolio </a></li>

				</ul>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()" alt="image">
			</div>
			<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
			<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		</div>

		<br><br>
		<h1 class="title">ABOUT MYSELF</h1>
		<!--adding dynamic list-->
		<div class="row">
			<div class="col-4"> 
					<img src="images/0V7A8011.JPG" alt="image">
				<br><br>
				<p style="font-size: 16px; text-align: justify;">I am Pratyush Shrestha. I am a student of ST xaviers, studying BIM. I will insert photo with the owner later.</p><br><br>
				
			</div>
		</div>


		<!--Footer-->
		<div class="footer">
			<div class="footercontainer">
				<div class="row">
					<div class="footer-col-1">
						<img src="images/dOMESTIC LOGO.png" alt="logo">
						<p>Fast and Relaible travelling partner </p>
						
						
					</div>
					<div class="footer-col-2">
						<h3>Useful Links</h3>
						<ul>
							<li><a href="home.php"> Home </a></li>
							<li><a href="about.php"> About Us </a></li>
							<li><a href="product.php"> Products </a></li>
							<li><a href="contact.php"> Contact Us </a></li>
							<li><a href="blog.php"> Blogs </a></li>
							<li><a href="favorite.php"> Favorite </a></li>
						</ul>
						
					</div>
					<div class="footer-col-3">
						<h3>Follow Us</h3>
						<ul>
							<li><a href="https://www.facebook.com/people/Domestic-Travels-and-Tours-Pvt-Ltd/100068925408941/?paipv=0&eav=AfaSO5EcVmxZXw2xoI4MwkQTESQ5gHq2kSqP7-XYDynKwz75iPxGeQegzjCu7oB5ffs&_rdr">Facebook</a></li>
							<li><a href="https://www.instagram.com/">Instagram</a></li>
							<li><a href="https://www.youtube.com/watch?v=AhP5Tg_BLIk">Youtube</a></li>
						</ul>	
					</div>	
				</div>
				<br>
				<div class="footer-col-4">
					<a href="#Top" class="button"> Go to Top &uarr;</a>
				</div>
				<br>
				<hr>
				<p class="copyright">Pratyush Shrestha &copy; 2023. All rights reserved</p>
			</div>	
		</div>
	</div>
	<script >
		var menuItems=document.getElementById("menu-items")
		menuItems.style.maxHeight ="0px";
		function menutoggle(){
			if(menuItems.style.maxHeight =="0px")
			{
				menuItems.style.maxHeight ="200px"
			}
			else{
				menuItems.style.maxHeight ="0px"
			}
		}
	</script>
</body>
</html>	





