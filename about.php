<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Domestic travels : About Us Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a id="Top"></a>
	<div class="container">
		<div class="header">
			<!--navigati-+on-->
			<div class="nav">
				<a href="index.php">
					<img src="images/dOMESTIC LOGO.png" alt="logo" class="logo1">
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
		<!--youtube video-->
		<h1 class="title">What is Domestic travels?</h1>
		<p class="video" >
		<iframe width="894" height="503" src="https://www.youtube.com/embed/zyfK9iMhal4?si=wl3y8yh41Jpz0hQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			<!-- <iframe width="894" height="503" src="https://www.youtube.com/watch?v=zyfK9iMhal4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
		</p>
		<br>
		<!--using grid-->
		<h1 class="title">The Story of Domestic travels</h1>
		<div class="box">
			<div class="about">
				<div class="about-posts">
					<a href="images/about1.jpg" target="_blank">
						<div style="background-image: url('images/about1.jpg'); " class="about-img"></div>
					</a>
				</div>
				<p class="about-para-right">Travelling has been go to plan for people from young to old. Every age group enjoy some time off and explore and vist new places by having a long nice vacation or travelling through mysterios and beautiful part of our country. The domestic travel has provided these services to the people for over 20 years.domestic travel has grown in popularity as more individuals want to explore their own countries as opposed to going overseas. Rising travel costs, worries about international security, and a growing desire to learn about local cultures and histories have all contributed to this trend.</p>
			</div>	
		</div><br><br>
		<h1 class="title">Our Origin</h1>
		<div class="box">
			<div class="about">
				<p class="about-para-left">
					Domestic travels was established in 2003 by Prabin Shrestha and since then they are providing best domestic and international travelling services. With wide range of connection with different hotels and resorts domestic travels has been providing best services for more than 20 years..<br><br></p>

				<div class="about-posts">
					
						<div style="background-image: url('images/dOMESTIC LOGO.png');" class="about-img"></div>
					</a>
				</div>
			</div>
		</div><br><br>
		<!--using flex-->
		<h1 class="title">Want to know more?</h1>
		<div class="row">
			<div class="col-4">
				<a href="images/about5.jpg" target="_blank"> 
					<img src="images/about5.jpg" alt="image">
				</a><br><br>
				<p style="font-size: 16px; text-align: justify;">Wildlife expirences in jugle of chitwan to elephant riding Domestic travel provide offers for wildlife lovers.</p>	
			</div>
			<div class="col-4">
				<a href="images/places-nepal-1660302912-785X440.jpg" target="_blank"> 	
					<img src="images/places-nepal-1660302912-785X440.jpg" alt="image">
				</a><br><br>
				<p style="font-size: 16px; text-align: justify;">With great view of monuments to religous temple nepal offers tourist with wide range of expirences..</p>
			</div>
			<div class="col-4">
				<a href="images/kathmandu.jpg" target="_blank"> 	
					<img src="images/kathmandu.jpg" alt="image">
				</a><br><br>
				<p style="font-size: 16px; text-align: justify;">Breathtaking views and great historical figures the tourists have been facinated with nepal historical Buildings. </p>
			</div>
		</div>

		<!--Footer-->
		<div class="footer">
			<div class="footercontainer">
				<div class="row">
					<div class="footer-col-1">
						<img src="images/dOMESTIC LOGO.png" alt="logo">
						<p>For fast and best travelling partner for you.</p>
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