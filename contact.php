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
	  <a href="search.php">Search</a>
	  <a class="active" href="contact.php">Contact</a>
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
	<img src="css/image/5.png" alt="search" style="width:550px;height:300px;margin:-50px 10px; z-index: -10;position: absolute" >
	<img src="css/image/6.png" alt="search" style="width:550px;height:300px;margin:120px 10px; z-index: -10;position: absolute" >
	<img src="css/image/7.png" alt="search" style="width:550px;height:300px;margin:290px 10px; z-index: -10;position: absolute" >

</body>


</html>
