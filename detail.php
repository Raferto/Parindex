<!DOCTYPE html>
<html>
<head>
	<title>Parindex-Detail Page</title>
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
	$data="SELECT NAMATEMPAT,NAMAKOTA,HTM,LOKASI,NOTELP,WEBSITE,DESKRIPSI,GROUP_CONCAT(DISTINCT tag.TAG) as TAG
		FROM tempatwisata,kota,tag,termasuk
		WHERE tempatwisata.IDTEMPAT='$id' AND
				tag.TAG=termasuk.TAG AND
				termasuk.IDTEMPAT=tempatwisata.IDTEMPAT AND
				kota.IDKOTA =(
					SELECT IDKOTA
					FROM tempatwisata
					WHERE IDTEMPAT='$id')
		GROUP BY tempatwisata.IDTEMPAT";
	$queryData_mysql = mysqli_query($host,$data);

	$foto="SELECT FOTO
		FROM fotolokasi
		WHERE fotolokasi.IDTEMPAT='$id'";
	$queryFoto_mysql = mysqli_query($host,$foto);

	$fasilitas="SELECT fasilitas.NAMAFASILITAS,fasilitas.BIAYA
		FROM fasilitas
		WHERE fasilitas.IDFASILITAS IN(
			SELECT IDFASILITAS
			FROM memiliki
			WHERE IDTEMPAT='$id')";
	$queryFasilitas_mysql = mysqli_query($host,$fasilitas);

	$jadwal="SELECT jadwal.HARI,jadwal.JAMBUKA,jadwal.JAMTUTUP
			FROM jadwal
			WHERE jadwal.IDJADWAL IN
				(SELECT IDJADWAL
				FROM beroprasi
				WHERE IDTEMPAT='$id'
				)
			ORDER BY FIELD(Jadwal.HARI,'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu')";
	$queryJadwal_mysql = mysqli_query($host,$jadwal);

	$rating="SELECT rating.NAMAPERATING,rating.KOMENTAR,rating.SCORE
			FROM rating
			WHERE rating.IDTEMPAT=$id
			ORDER BY rating.IDRATING";
	$queryRating_mysql = mysqli_query($host,$rating);
	?>

	<?php
	$data = mysqli_fetch_array($queryData_mysql);
	?>
	<?php echo $data['NAMATEMPAT'] ?>


</body>
</html>
