<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Domestic Travels : Home Page</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script >
		var image1=new Image();
		image1.src="images/Gosaikunda-lakes-768x432.jpg" ;
		var image2=new Image() ;
		image2.src="images/gokyo.jpg"  ;
		var image3=new Image() ;
		image3.src="images/Nepal-Historical-Places-Featured-Image.jpg" ;
		var image4=new Image() ;
		image4.src="images/covera-gh.jpg" ;
		
	</script>

</head>
<body>
	<!--go to top nav-->
	<a id="Top"></a>
	<div class="container">
		<div class="header">
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

		<!--Image Slider-->

		<div class="slider">
			<img src="image2.jpg" id="slide"  alt="image">
			<script>
				var step=1
				function slideit(){
					if (!document.images)
						return;
					document.images.slide.src=eval("image"+step+".src");
					document.images.slide.src=eval("image"+step+".src");
					if (step<4)
						step++;
					else
						step=1;
					setTimeout("slideit()", 2200);
				}
				slideit()
			</script>	
		</div>	
		<!--Feature facts Section-->
		<div class="categories">
			<div class="small-container">
				<h2 class="title">Trending Places to visit</h2>
				<div class="row">
					<div class="col-3">
						<a href="images/Everest.jpg"  target="_blank">
							<img src="images/Everest.jpg" alt="image" >
                                                                                                                               <h4>Mt everest</h4>

						</a>
						
					</div>
					<div class="col-3">
						<a href="images/Phoksundo-Lake.jpg" target="_blank">
							<img src="images/Phoksundo-Lake.jpg" alt="image">
							<h4>Phoksundo lake</h4>
						</a>
						
					</div>
					<div class="col-3">
						<a href="images/the-heart-soul-of-pokhara.jpg" target="_blank">
							<img src="images/the-heart-soul-of-pokhara.jpg" alt="image">
							<h4>Pokhara</h4>
						</a>
					</div>	
				</div>
			</div>	
		</div>
		<!--Most Selling Section-->
		<div class="small-container">
			<h2 class="title">Most Selling Packagess</h2>
			<div class="row">
				<div class="col-4">
					<img src="images/2e11d404d50611e7940f0a5fe13dcb40.jpg" alt="image">
					<h4>Mystic Moutain (Nagarkot)</h4>
					<p>Rs 15000 per night</p>
					<a href="product.php"><button>View More</button></a>
				</div>
				<div class="col-4">
					<img src="images/201709191328482484-b8805454569d11e783290a9df65c8753.jpg" alt="image">
					<h4>Temple tree (Pokhara)</h4>
					<p>Rs 10000 per night</p>
					<a href="product.php"><button>View More</button></a>
				</div>
				<div class="col-4">
					<img src="images/140533453.jpg" alt="image">
					<h4>Rupakot Resort(Pokhara)</h4>
					<p>Rs 18000 per night </p>
					<a href="product.php"><button>View More</button></a>
				</div>
				<div class="col-4">
					<img src="images/banner-3.jpg" alt="image">
					<h4>Hotel Himalayan Horizon (Dulikhel)</h4>
					<p>Rs 6000 per night </p>
					<a href="product.php"><button>View More</button></a>
				</div>

			</div>
		</div>
		<!-- Fresh Packages-->
		<h2 class="title">New Packages</h2>
		<div class="row">
			<div class="col-4">
				<img src="images/286725_14031817520018751382.jpg" alt="image">
				<h4>Fishtail lodge (Pokhara)</h4>
				<p>Rs5000 per night</p>
				<a href="product.php"><button>View More</button></a>
			</div>
			<div class="col-4">
				<img src="images/121188767.jpg" alt="image">
				<h4>Moms Garden Resort (Pokhara)</h4>
				<p>Rs 7000 per night</p>
				<a href="product.php"><button>View More</button></a>
			</div>
			
			<div class="col-4">
				<img src="images/jm-1.jpg" alt="image">
				<h4>Jomsom Mountain Resort (Jomsom)</h4>
				<p>Rs 6000 per night </p>
				<a href="product.php"><button>View More</button></a>
			</div>
			<div class="col-4">
				<img src="images/getlstd-property-photo.jpg" alt="image">
				<h4>Park Safari  (Chitwan)</h4>
				<p>Rs 80000 per night </p>
				<a href="product.php"><button>View More</button></a>
			</div>

		</div>
		<div class="row">
			<div class="col-4">
				<img src="images/3365935_18020618430061586518.jpg" alt="image">
				<h4>Hotel Nana(Chitwan)</h4>
				<p>Rs 12000 per night</p>
				<a href="product.php"><button>View More</button></a>
			</div>
			<div class="col-4">
				<img src="images/393316328.jpg" alt="image">
				<h4>Green Mansion(Chitwan)</h4>
				<p>Rs 9000 per night</p>
				<a href="product.php"><button>View More</button></a>
			</div>
			<div class="col-4">
				<img src="images/poon-hill-trek.jpg" alt="image">
				<h4>Poon hill trekking (4 night 5 days) </h4>
				<p> Estimated  Rs 28000  </p>
				<a href="product.php"><button>View More</button></a>
			</div>
			<div class="col-4">
				<img src="images/langtang-kyanjin.jpeg" alt="image">
				<h4>Langtang Trekking (4 night 5 days)</h4>
				<p>Estimated Rs 35000 </p>
				<a href="product.php"><button>View More</button></a>
			</div>

		</div>
		<!--Footer-->
		<div class="footer">
			<div class="footercontainer">
				<div class="row">
					<div class="footer-col-1">
						<img src="images/dOMESTIC LOGO.png" alt="logo">
						<p>Fast and Reliable travelling partner. </p>
						
						
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
	<script>
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