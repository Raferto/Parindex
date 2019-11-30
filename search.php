<?php
include('includes/config.php');
$input= "a";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Search </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- Custom Theme files -->
		<script src="js/jquery-1.12.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!--animate-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
			<script>
				 new WOW().init();
			</script>
	</head>

	<body>
		<?php include('includes/header.php');?>
		<div class="banner-1 ">
			<div class="container">
				<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Cari tempat Wisata yang diinginkan</h1>
			</div>
		</div>
		<?php echo "<br>";?>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			search by:
			 <select name="input">
				 <option value="" selected="selected" class="form-control">Select One</option>
				  <option value="search.php?input=nama">Nama</option>
				  <option value="search.php?input=kota">Kota</option>
				  <option value="search.php?input=htm">HTM</option>
				  <option value="search.php?input=rating">Rating</option>
				  <option value="search.php?input=hari">Hari</option>
				  <option value="search.php?input=waktu">Waktu</option>
				  <option value="search.php?input=tag">Tag</option>
			 </select>
		</td>
		<?php echo "<br>";?>
		<?php echo "<br>";?>

		<?php
		if($input == "nama"){
				echo "test";
		}
		else {
			echo $input;
		}
		?>

		<?php include('includes/footer.php');?>
	</body>

</html>
