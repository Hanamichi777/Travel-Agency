<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Domestic travels: Packages</title>
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
					<img src="images/dOMESTIC LOGO.png" class="logo1" alt="logo">
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
		<!--All Products section-->
		<div class="small-container">
			<div class="row row-2">
				<h2 class="title">All Products</h2>
				<!--drop down box-->
				<select>
					<option>Default</option>
					<option>Most Selling Product</option>
					<option>Sort by Animal Prints</option>
					<option>Sort by Birds Prints</option>
					<option>Sort by Landscape Prints</option>

				</select>

			</div>

		</div>
		<!-- Products in 4 columns using flex-->
		<div class="row">
			<div class="col-4">
				<img src="images/2e11d404d50611e7940f0a5fe13dcb40.jpg" alt="image">
					<h4>Mystic Moutain (Nagarkot)</h4>
					<p>Rs 8000 per night</p>
					<a href="cart.php?product=Mystic mountail"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/banner-3.jpg" alt="image">
					<h4>Hotel Himalayan Horizon (Dulikhel)</h4>
					<p>Rs 4500 per night </p>
					<a href="cart.php?product=Hotel Himalayan Horizon"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/140533453.jpg" alt="image">
					<h4>Rupakot Resort(Pokhara)</h4>
					<p>Rs 9000 per night </p>
					<a href="cart.php?product=Rupakort Resort"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/201709191328482484-b8805454569d11e783290a9df65c8753.jpg" alt="image">
					<h4>Temple tree (Pokhara)</h4>
					<p>Rs 8500 per night</p>
					<a href="cart.php?product=Temple Tree"><button>Add to Cart</button></a>
			</div>

		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/jm-1.jpg" alt="image">
				<h4>Jomsom Mountain Resort (Jomsom)</h4>
				<p>Rs 3000 per night </p>
				<a href="cart.php?product=Jomsom Mountain Resort"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/getlstd-property-photo.jpg" alt="image">
				<h4>Park Safari  (Chitwan)</h4>
				<p>Rs 4000 per night </p>
				<a href="cart.php?product=Park Safari"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/286725_14031817520018751382.jpg" alt="image">
				<h4>Fishtail lodge (Pokhara)</h4>
				<p>Rs2500 per night</p>
				<a href="cart.php?product=Fishtail Lodge"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/121188767.jpg" alt="image">
				<h4>Moms Garden Resort (Pokhara)</h4>
				<p>Rs 3000 per night</p>
				<a href="cart.php?product=Moms garden Resort"><button>Add to Cart</button></a>
			</div>

		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/mardi-himal-trek.jpg" alt="image">
				<h4>Mardi Trek (4 night 5 days)</h4>
				<p>estimated cost Rs28000</p>
				<a href="cart.php?product=Mardi trek"><button>Add to Cart</button></a>
			</div>

			<div class="col-4">
				<img src="images/Annapurna-Base-Camp-Trek.jpg" alt="image">
				<h4>Annapurna Base Camp Trek (6 night 7 days)</h4>
				<p>Estimate around 35000 </p>
				<a href="cart.php?product=annapurna base camp"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/c3.jpg" alt="image">
				<h4>Hotel Country Villa (Nagarkot)</h4>
				<p>Rs 4000 </p>
				<a href="cart.php?product=Hotel country villa"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/expediav2-816153-2819246780-751442.jpg" alt="image">
				<h4>Pavilions Himalayas(Pokhara)</h4>
				<p>Rs6000 per night </p>
				<a href="cart.php?product=Pavilions Himalayas"><button>Add to Cart</button></a>
			</div>

		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/54782666.jpg" alt="image">
				<h4>The Dwarika's Resort (per print)</h4>
				<p>Rs 8500 per night</p>
				<a href="cart.php?product=The Dwarika's Resort"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/QCSwx-building.jpg" alt="image">
				<h4>Hotel Sarathi (Dulikhel)</h4>
				<p>Rs 3500 per night</p>
				<a href="cart.php?product=Couple"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/411155247.jpg" alt="image">
				<h4>Himalayan Deurali Resort (Dulikhel)</h4>
				<p>Rs 4000 per night</p>
				<a href="cart.php?product=Himalayan Deurali Resort"><button>Add to Cart</button></a>
			</div>
			
			
			<div class="col-4">
				<img src="images/f-5.jpg" alt="image">
				<h4>Raniban Retreat(pokhara)</h4>
				<p>Rs 2200 per night </p>
				<a href="cart.php?product=Raniban Retreat"><button>Add to Cart</button></a>
			</div>

		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/239919390.jpg" alt="image">
				<h4>Charikot Panorama Resort (Dolkha)</h4>
				<p>Rs 4500 per night</p>
				<a href="cart.php?product=Charikot Panorama Resort"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/33092115.jpg" alt="image">
				<h4>Tiger Mountain Pokhara Lodge(Pokhara)</h4>
				<p>Rs 9500 per night</p>
				<a href="cart.php?product=Tiger Mountain Pokhara Lodge"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/mountain-glory-forest.jpg" alt="image">
				<h4>Mountain Glory Forest Resort (Pokhara)</h4>
				<p>Rs 4500 per night </p>
				<a href="cart.php?product=Mountain Glory Forest Resort"><button>Add to Cart</button></a>
			</div>
			<div class="col-4">
				<img src="images/16002324-pool-area-hyatt-regency-kathmandu.jpg" alt="image">
				<h4>Hyatt Regency (Kathmandu)</h4>
				<p>Rs 10000 per night </p>
				<a href="cart.php?product=Hyatt Regency"><button>Add to Cart</button></a>
			</div>

		</div>
		<!-- numbering pages-->
		<div class="page-btn">
			<a href="#"><span>1</span></a>
			<a href="#"><span>2</span></a>
			<a href="#"><span>3</span></a>
			<a href="#"><span>&#8594;</span></a>
		</div>	
		

		<!--Footer-->
		<div class="footer">
			<div class="footercontainer">
				<div class="row">
					<div class="footer-col-1">
						<img src="images/dOMESTIC LOGO.png" alt="logo">
						<p>Best and reliable travel partner for you. </p>


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