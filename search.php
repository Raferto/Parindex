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
				<div class="text1"> <p id="text1">Cari Berdasarkan :</p> </div>
				<div class="dropdown" style="margin: 15px 170px">
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
				  	<input style="background-image: url('css/image/1.png'); background-size: 40px; background-repeat: no-repeat;"
					type="text" name="cari" placeholder="Masukan Nama Tempat">
				</form>

				<?php
			}
			else if( $_GET["search"] == "kota"){
				?>
				<div class="text1"> <p id="text1">Cari Berdasarkan :</p> </div>
				<div class="dropdown" style="margin: 15px 170px">
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

				<form action="sKota.php" method="post">
					<input style="background-image: url('css/image/1.png'); background-size: 40px; background-repeat: no-repeat;"
					type="text" name="cari" placeholder="Masukan Nama Kota">
				</form>

				<?php
			}
			else if( $_GET["search"] == "htm"){
				?>
				<div class="text1"> <p id="text1">Cari Berdasarkan :</p> </div>
				<div class="dropdown" style="margin: 15px 170px">
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

				<form action="sHTM.php" method="post">
					<input type="text" name="cari" placeholder="Masukan Harga Minimal">
					<span style='color:grey; font-size: 50px;'>-</span>
					<input type="text" name="cari2" placeholder="Masukan Harga maksimal">
					<input type="submit" value="Cari">
				</form>

				<?php
			}
			else if( $_GET["search"] == "rating"){
				?>
				<div class="text1"> <p id="text1">Cari Berdasarkan :</p> </div>
				<div class="dropdown" style="margin: 15px 170px">
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
				<form action="sRating.php" method="post">
					<input type="text" name="cari" placeholder="Masukan Rating Minimal">
					<span style='color:grey; font-size: 50px;'>-</span>
					<input type="text" name="cari2" placeholder="Masukan Rating maksimal">
					<input type="submit" value="Cari">
				</form>
				<?php
			}
			else if( $_GET["search"] == "hari"){
				?>
				<div class="text1"> <p id="text1">Cari Berdasarkan :</p> </div>
				<div class="dropdown" style="margin: 15px 170px">
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
				<br>
				<div class="dropdown2" style="margin: 15px 170px">
					<button class="dropbtn2">Pilih Hari</button>
					  <div class="dropdown2-content">
						<a href="sHari.php?cari=senin">Senin</a>
						<a href="sHari.php?cari=selasa">Selasa</a>
						<a href="sHari.php?cari=rabu">Rabu</a>
						<a href="sHari.php?cari=kamis">Kamis</a>
						<a href="sHari.php?cari=jumat">Jumat</a>
						<a href="sHari.php?cari=sabtu">Sabtu</a>
						<a href="sHari.php?cari=Minggu">Minggu</a>
					  </div>
				</div>

				<?php
			}
			else if( $_GET["search"] == "waktu"){
				?>
				<div class="text1"> <p id="text1">Cari Berdasarkan :</p> </div>
				<div class="dropdown" style="margin: 15px 170px">
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
				<form action="sWaktu.php" method="post">
					<input type="time" name="cari">
					<span style='color:grey; font-size: 50px;'>-</span>
					<input type="time" name="cari2">
					<select	name="cari3" style="width:100px; height:50px; font-size:15px; padding:5px 5px; border:1px solid grey">
						<option value="">Pilih Hari</option>
						<option value="senin">Senin</option>
						<option value="selasa">Selasa</option>
						<option value="rabu">Rabu</option>
						<option value="kamis">Kamis</option>
						<option value="jumat">Jumat</option>
						<option value="sabtu">Sabtu</option>
						<option value="minggu">Minggu</option>
					</select>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type="submit" value="Cari">
				</form>

				<?php
			}
			else if( $_GET["search"] == "tag"){
				?>
				<div class="text1"> <p id="text1">Cari Berdasarkan :</p> </div>
				<div class="dropdown" style="margin: 15px 170px">
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

				<form action="sTag.php" method="get">
					&nbsp&nbsp&nbsp Pilih Tag:
					<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<button name="cari" type="submit" value="monument" style="min-width: 50px;">Monument</button>&nbsp
					<button name="cari" type="submit" value="safari" style="min-width: 50px;">Safari</button>
					<button name="cari" type="submit" value="taman hhiburan" style="min-width: 50px;">Taman Hiburan</button>
					<button name="cari" type="submit" value="pemandian" style="min-width: 50px;">Pemandian</button>
					<button name="cari" type="submit" value="museum" style="min-width: 50px;">Museum</button>
					<button name="cari" type="submit" value="kampung wisata" style="min-width: 50px;">Kampung Wisata</button>
					<button name="cari" type="submit" value="Keraton" style="min-width: 50px;">Keraton</button>
				</form>


				<?php
			}
			else{
				?>
				<img src="css/image/2.png" alt="search" style="width:300px;height:300px;margin:50px 100px; position: absolute" >
				<div class="text2"> <p id="text">Cari Berdasarkan:</p> </div>
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
			<div class="text2"> <p id="text2" >Cari Berdasarkan:</p> </div>
			<div class="dropdown" style="margin: 110px 530px">
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
			<?php
		}
	?>

</body>
</html>
