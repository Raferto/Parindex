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
	$host = mysqli_connect("localhost","root","","parindex");
	$id = $_GET['id'];
	echo $id;
	$q='SELECT NAMATEMPAT,NAMAKOTA,HTM,LOKASI,NOTELP,WEBSITE,DESKRIPSI,GROUP_CONCAT(DISTINCT tag.TAG) as TAG 
		FROM tempatwisata,kota,tag,termasuk
		WHERE tempatwisata.IDTEMPAT='$id' AND
				tag.TAG=termasuk.TAG AND
				termasuk.IDTEMPAT=tempatwisata.IDTEMPAT AND
				kota.IDKOTA =(
					SELECT IDKOTA
					FROM tempatwisata
					WHERE IDTEMPAT='$id')
		GROUP BY tempatwisata.IDTEMPAT';
	$q2='SELECT FOTO
		FROM fotolokasi
		WHERE fotolokasi.IDTEMPAT='$id'';
	$q3='SELECT fasilitas.NAMAFASILITAS,fasilitas.BIAYA
		FROM fasilitas
		WHERE fasilitas.IDFASILITAS IN(
			SELECT IDFASILITAS
			FROM memiliki
			WHERE IDTEMPAT='$id')';
	$q4='SELECT jadwal.HARI,jadwal.JAMBUKA,jadwal.JAMTUTUP
			FROM jadwal
			WHERE jadwal.IDJADWAL IN
				(SELECT IDJADWAL
				FROM beroprasi
				WHERE IDTEMPAT='$id'
				)
			ORDER BY FIELD(Jadwal.HARI,'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu')';
	$q5='SELECT rating.NAMAPERATING,rating.KOMENTAR,rating.SCORE
			FROM rating
			WHERE rating.IDTEMPAT=$id
			ORDER BY rating.IDRATING

			SELECT FOTO
			FROM fotolokasi
			WHERE fotolokasi.IDTEMPAT='$id'';
	$q6-'INSERT INTO rating VALUES ('','$id','$namaperating','$komen',$nilai);
		UPDATE tempatwisata SET JMHRATING = JMHRATING+1 WHERE IDTEMPAT='$id';
		UPDATE tempatwisata SET RERATARATING = 
			(SELECT SUM(SCORE)
			FROM RATING
			WHERE IDTEMPAT='$id')/JMHRATING
		WHERE IDTEMPAT='$id';';		
	$q7='SELECT tempatwisata.NAMATEMPAT,rating.NAMAPERATING,rating.KOMENTAR,rating.SCORE
		FROM tempatwisata,rating
		WHERE tempatwisata.IDTEMPAT='$id' AND rating.IDTEMPAT='$id'';
		
	?>

</body>


</html>
