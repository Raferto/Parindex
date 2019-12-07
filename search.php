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
				?>
				<div class="text1"> <p id="text1">Search by :</p> </div>
				<div class="dropdown" style="margin: 15px 150px">
					<button class="dropbtn">Nama</button>
					  <div class="dropdown-content">
						<a href="search.php?search=kota">Kota</a>
						<a href="search.php?search=htm">HTM</a>
						<a href="search.php?search=rating">Rating</a>
						<a href="search.php?search=hari">Hari</a>
						<a href="search.php?search=waktu">Waktu</a>
						<a href="search.php?search=tag">Tag</a>
					  </div>
				</div>

				<form action="sNama.php" method="post">
				  	<input type="text" name="cari" placeholder="Masukan Nama Tempat">
				</form>

				<br><br><br><br><br><br><br><br><br><br><br>
				<?php
			}
			else if( $_GET["search"] == "kota"){
				?>
				<div class="text1"> <p id="text1">Search by :</p> </div>
				<div class="dropdown" style="margin: 15px 150px">
					<button class="dropbtn">Kota</button>
					  <div class="dropdown-content">
						<a href="search.php?search=nama">Nama</a>
						<a href="search.php?search=htm">HTM</a>
						<a href="search.php?search=rating">Rating</a>
						<a href="search.php?search=hari">Hari</a>
						<a href="search.php?search=waktu">Waktu</a>
						<a href="search.php?search=tag">Tag</a>
					  </div>
				</div>
				<?php
			}
			else if( $_GET["search"] == "htm"){
				?>
				<div class="text1"> <p id="text1">Search by :</p> </div>
				<div class="dropdown" style="margin: 15px 150px">
					<button class="dropbtn">HTM</button>
					  <div class="dropdown-content">
						<a href="search.php?search=nama">Nama</a>
						<a href="search.php?search=kota">Kota</a>
						<a href="search.php?search=rating">Rating</a>
						<a href="search.php?search=hari">Hari</a>
						<a href="search.php?search=waktu">Waktu</a>
						<a href="search.php?search=tag">Tag</a>
					  </div>
				</div>
				<?php
			}
			else if( $_GET["search"] == "rating"){
				?>
				<div class="text1"> <p id="text1">Search by :</p> </div>
				<div class="dropdown" style="margin: 15px 150px">
					<button class="dropbtn">Rating</button>
					  <div class="dropdown-content">
						<a href="search.php?search=nama">Nama</a>
						<a href="search.php?search=kota">Kota</a>
						<a href="search.php?search=htm">HTM</a>
						<a href="search.php?search=hari">Hari</a>
						<a href="search.php?search=waktu">Waktu</a>
						<a href="search.php?search=tag">Tag</a>
					  </div>
				</div>
				<?php
			}
			else if( $_GET["search"] == "hari"){
				?>
				<div class="text1"> <p id="text1">Search by :</p> </div>
				<div class="dropdown" style="margin: 15px 150px">
					<button class="dropbtn">Hari</button>
					  <div class="dropdown-content">
						<a href="search.php?search=nama">Nama</a>
						<a href="search.php?search=kota">Kota</a>
						<a href="search.php?search=htm">HTM</a>
						<a href="search.php?search=rating">Rating</a>
						<a href="search.php?search=waktu">Waktu</a>
						<a href="search.php?search=tag">Tag</a>
					  </div>
				</div>
				<?php
			}
			else if( $_GET["search"] == "waktu"){
				?>
				<div class="text1"> <p id="text1">Search by :</p> </div>
				<div class="dropdown" style="margin: 15px 150px">
					<button class="dropbtn">Waktu</button>
					  <div class="dropdown-content">
						<a href="search.php?search=nama">Nama</a>
						<a href="search.php?search=kota">Kota</a>
						<a href="search.php?search=htm">HTM</a>
						<a href="search.php?search=rating">Rating</a>
						<a href="search.php?search=hari">Hari</a>
						<a href="search.php?search=tag">Tag</a>
					  </div>
				</div>
				<?php
			}
			else if( $_GET["search"] == "tag"){
				?>
				<div class="text1"> <p id="text1">Search by :</p> </div>
				<div class="dropdown" style="margin: 15px 150px">
					<button class="dropbtn">Tag</button>
					  <div class="dropdown-content">
						<a href="search.php?search=nama">Nama</a>
						<a href="search.php?search=kota">Kota</a>
						<a href="search.php?search=htm">HTM</a>
						<a href="search.php?search=rating">Rating</a>
						<a href="search.php?search=hari">Hari</a>
						<a href="search.php?search=waktu">Waktu</a>
					  </div>
				</div>
				<?php
			}
			else{
				?>
				<img src="css/image/2.png" alt="search" style="width:300px;height:300px;margin:50px 100px; position: absolute" >
				<div class="text2"> <p id="text">Search by:</p> </div>
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
					  </div>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br>
				<?php

			}
		}
		else{
			?>
			<img src="css/image/2.png" alt="search" style="width:300px;height:300px;margin:50px 100px; position: absolute" >
			<div class="text2"> <p id="text">Search by:</p> </div>
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
				  </div>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br>
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
