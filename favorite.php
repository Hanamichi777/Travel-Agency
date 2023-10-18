<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Domestic Travels : Favorite Package Page</title>
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
		<h1 class="title">Add your Favorite Package </h1>
		<!--adding dynamic list-->
		<div class="favorite">
			<div class="favorite-container">
				<label for="item">Enter your favorite places to visit:</label>
				<input type="text" name="item" id="item">
				<button>Add Product</button>
				<ol></ol>
				<!--declaring variables and functions in javascript-->
				<script>

					const list = document.querySelector('.favorite ol');
					const input = document.querySelector('.favorite input');
					const button = document.querySelector('.favorite button');

					button.onclick = function() {
						let myItem = input.value;
						input.value = '';

						const listItem = document.createElement('li');
						const listText = document.createElement('span');
						const listBtn = document.createElement('button');
						
						/*using if-else to avoid null values*/
						if (myItem == ""){
							alert("Enter the name of the animals or birds you want to add to your list.");
							input.focus();
						}

						else{

							listItem.appendChild(listText);
							listText.textContent = myItem;
							listItem.appendChild(listBtn);
							listBtn.textContent = 'Delete';
							list.appendChild(listItem);

							listBtn.onclick = function(e) {
								list.removeChild(listItem);
							}
						}

						input.focus();
					}

				</script>
			</div>
		</div>


		<!--Footer-->
		<div class="footer">
			<div class="footercontainer">
				<div class="row">
					<div class="footer-col-1">
						<img src="images/dOMESTIC LOGO.png" alt="logo">
						<p>Best and relaible travel partner for you. </p>
						
						
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





