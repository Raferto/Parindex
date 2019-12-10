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
			WHERE rating.IDTEMPAT='$id'
			ORDER BY rating.IDRATING";
	$queryRating_mysql = mysqli_query($host,$rating);
	?>
	
	<table border="1" class="table">
	<?php
		$nomor = 1;
		 ?>
		<tr>
			<th>No</th>
			<th>Fasilitas</th>
			<th>Biaya</th>
		</tr>
		<?php while($fasilitas = mysqli_fetch_array($queryFasilitas_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $fasilitas['NAMAFASILITAS']; ?></td>
			<td><?php echo $fasilitas['BIAYA']; ?></td>
		</tr>
		<?php }  ?>
	</table>
	
	<br>	
	<br>
	<br>
	<table border="1" class="table">
	<?php
		$nomor = 1;
		 ?>
		<tr>
			<th>Hari</th>
			<th>Jam Buka</th>
			<th>Jam Tutup</th>
		</tr>
		<?php while($jadwal = mysqli_fetch_array($queryJadwal_mysql)){
		?>
		<tr>
			<td><?php echo $jadwal['HARI']; ?></td>
			<td><?php echo $jadwal['JAMBUKA']; ?></td>
			<td><?php echo $jadwal['JAMTUTUP']; ?></td>
		</tr>
		<?php }  ?>
	</table>
	
	<br>
	<br>
	<br>
	<table border="1" class="table">
	<?php
		$nomor = 1;
		 ?>
		<tr>
			<th>Perating</th>
			<th>Komentar</th>
			<th>Score</th>
		</tr>
		<?php while($rating = mysqli_fetch_array($queryRating_mysql)){
		?>
		<tr>
			<td><?php if($rating['NAMAPERATING'])
					  echo $rating['NAMAPERATING'];
					  else echo 'Anonim'?></td>
			<td><?php echo $rating['KOMENTAR']; ?></td>
			<td><?php echo $rating['SCORE']; ?></td>
		</tr>
		<?php }  ?>
	</table>
	


</body>
</html>
