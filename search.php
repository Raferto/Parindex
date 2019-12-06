<!DOCTYPE html>
<html>
<head>
	<title>Parindex-Main</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<style>
input[type=text], select {
  width: 15%;
  padding: 10px 30px;
  margin: 30px 30px;
  border: 1.5px solid #ccc;
  font-size: 20px;
  font-family: cursive;
  color: #34ad00;
}

input[type=submit] {
  width: 7%;
  color: white;
  background-color: #3F84B1;
  padding: 12px 15px;
  font-size: 20px;
  resize: none;
  border: none;
  border-radius: 1000px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #3F55B1;
  color: black;
}

</style>
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

	<!--- sticky navbar ---->
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
	<!--- sticky navbar ---->

	<form action="search.php">
	  <class="select">
	  	<select name="search">
			<option value="" selected="selected" class="form-control">Select One</option>
  			<option value="nama">Nama</option>
  			<option value="kota">Kota</option>
  			<option value="htm">HTM</option>
  			<option value="rating">Rating</option>
  			<option value="hari">Hari</option>
  			<option value="waktu">Waktu</option>
  			<option value="tag">Tag</option>
	  	</select>
	  <input type="submit">
	</form>
	<br>

	<?php
		if( isset($_GET["search"])){
			if( $_GET["search"] == "nama"){
				echo "nama";
			}
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
