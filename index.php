<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Domestic Travels : Index Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<!--index container-->
	<div class="banner" style="height: 100vh;" >
		<!--Navigation-->
		<div class="navbar">
			<!--logo-->
			<a href="index.php">
				<img src="images/dOMESTIC LOGO.png" class="logo" alt="logo">
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
		<!--index body-->
		<div class="content">
			<h1>Your travel partner Domestic Travels</h1>
			<p>Your fast and reliable travel partner for you.</p>
			<div class="index-button">
				<a href="home.php"><button type="button"> <span></span> DISCOVER MORE </button></a>
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