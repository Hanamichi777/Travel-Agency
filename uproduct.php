<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $database = "travels";

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch all rows from the "packages" table
    $sql = "SELECT id, name, price FROM packages";
    $result = $conn->query($sql);

    // Create an array to store the JSON objects
    $packages = array();
  echo $result;
    // Fetch rows and create JSON objects
    if ($result !== false && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $package = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price']
            );
            $packages[] = $package;
        }
    }

    // Close the connection
    $conn->close();
?>
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
			<?php foreach ($packages as $package) : ?>
				<tr>
					<td><?php echo $package['id']; ?></td>
					<td><?php echo $package['name']; ?></td>
					<td><?php echo $package['price']; ?></td>
				</tr>
				<div class="col-4">
					<img src="<?php echo $package['image']; ?>" alt="image">
					<h4><?php echo $package['name']; ?></h4>
					<p>Rs <?php echo $package['price']; ?> per night</p>
					<a href="cart.php?product=<?php echo $package['name']; ?>"><button>Add to Cart</button></a>
				</div>
			<?php endforeach; ?>
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