<!DOCTYPE html>
<html>
<head>
	<title>Parindex-Main</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>

<body>
	<!-- header -->
	<div class="top-header"> </div>
	<div class="header">
		<div class="container">
			<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
				<a>Par<span>index</span></a>
			</div>
		</div>
	</div>
	<div id="navbar">
	  <a href="index.php">Home</a>
	  <a class="active" href="search.php">Search</a>
	  <a href="contact.php">Contact</a>
	</div>
	<!--- header ---->
	<script>
		window.onscroll = function() {myFunction()};

		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function myFunction() {
		  if (window.pageYOffset >= sticky) {
		    navbar.classList.add("sticky")
		  } else {
		    navbar.classList.remove("sticky");
		  }
		}
	</script>
	<?php
		if( isset($_GET["search"])){
			if( $_GET["search"] == "nama"){
				echo "nama";
			}
			else{
				?>
				<img src="css/image/2.png" alt="search" style="width:300px;height:300px;margin:50px 100px; position: absolute" >
				<div class="text"> <p id="text">Search by:</p> </div>
				<div class="dropdown" style="margin: 60px 550px">
					<button class="dropbtn">select one</button>
					  <div class="dropdown-content">
					    <a href="search.php?search=nama">Nama</a>
						<a href="search.php?search=kota">Kota</a>
						<a href="search.php?search=htm">HTM</a>
						<a href="search.php?search=rating">Rating</a>
						<a href="search.php?search=hari">Hari</a>
						<a href="search.php?search=waktu">Waktu</a>
						<a href="search.php?search=tag">Tag</a>
						<a href="search.php?search=">Nama</a>
					  </div>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br>;
				<?php

			}
		}
		else{
			?>
			<img src="css/image/2.png" alt="search" style="width:300px;height:300px;margin:50px 100px; position: absolute" >
			<div class="text"> <p id="text">Search by:</p> </div>
			<div class="dropdown" style="margin: 60px 550px">
				<button class="dropbtn">select one</button>
				  <div class="dropdown-content">
					<a href="search.php?search=nama">Nama</a>
					<a href="search.php?search=kota">Kota</a>
					<a href="search.php?search=htm">HTM</a>
					<a href="search.php?search=rating">Rating</a>
					<a href="search.php?search=hari">Hari</a>
					<a href="search.php?search=waktu">Waktu</a>
					<a href="search.php?search=tag">Tag</a>
					<a href="search.php?search=">Nama</a>
				  </div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br>;
			<?php
		}
	?>
	<!--- footer ---->
	<div class="copy-right">
		<div class="container">
			<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2019 Parindex . All Rights Reserved </p>
		</div>
	</div>
	<!--- footer ---->

</body>
</html>
