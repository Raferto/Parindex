
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

	<!--- query ---->
	<?php
	$host = mysqli_connect("localhost","root","","parindex");
	$cari ="";
	?>
	<table border="1" class="table">
	<?php
	if(isset($_POST['cari'])){
		$cari = $_POST['cari'];
		echo "<b>Hasil pencarian berdasarkan kota : ".$cari."</b>"; 
			if(empty($cari)){
				$q = "SELECT tempatwisata.NAMATEMPAT,kota.NAMAKOTA,GROUP_CONCAT(DISTINCT tag.TAG) as Tag,tempatwisata.HTM,fotolokasi.FOTO,tempatwisata.RERATARATING
						FROM tempatwisata,termasuk,kota,tag,fotolokasi
						WHERE kota.IDKOTA = tempatwisata.IDKOTA AND
							termasuk.IDTEMPAT = tempatwisata.IDTEMPAT AND
							tag.TAG=termasuk.TAG AND
							fotolokasi.IDTEMPAT = tempatwisata.IDTEMPAT
						GROUP BY tempatwisata.IDTEMPAT	
						ORDER BY tempatwisata.NAMATEMPAT ASC";
			}
			else{
				$q = "SELECT tempatwisata.NAMATEMPAT,kota.NAMAKOTA,GROUP_CONCAT(DISTINCT tag.TAG) as Tag,tempatwisata.HTM,fotolokasi.FOTO,tempatwisata.RERATARATING
						FROM tempatwisata,termasuk,kota,tag,fotolokasi
						WHERE kota.IDKOTA = tempatwisata.IDKOTA AND
							termasuk.IDTEMPAT = tempatwisata.IDTEMPAT AND
							tag.TAG=termasuk.TAG AND
							fotolokasi.IDTEMPAT = tempatwisata.IDTEMPAT AND
							kota.NAMAKOTA LIKE '%$cari%'
						GROUP BY tempatwisata.IDTEMPAT
						ORDER BY tempatwisata.NAMATEMPAT ASC";
			}
			$query_mysql = mysqli_query($host,$q);
	}
	else{
		$query_mysql = mysqli_query($host,"SELECT * FROM user")or die(mysql_error());
	}
		$nomor = 1;
		if(mysqli_num_rows($query_mysql) > 0){ ?>
		<tr>
			<th>No</th>
			<th>Nama Tempat</th>
			<th>Kota</th>
			<th>Tag</th>
            <th>HTM</th>	
			<th>Foto</th>
			<th>Rating</th>
		</tr>
		<?php while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['NAMATEMPAT']; ?></td>
			<td><?php echo $data['NAMAKOTA']; ?></td>
			<td><?php echo $data['Tag']; ?></td>
			<td><?php echo $data['HTM']; ?></td>
            <td><img src="<?php echo "file/".$data['FOTO']; ?>" style="width:200px;height:200px;"></td>
			<td><?php echo $data['RERATARATING']; ?></td>
			<td>
				<a class="edit" href="detail.php?id=<?php echo $data['IDTEMPAT']; ?>">Detail</a>				
			</td>
		</tr>
		<?php } } else { echo "<br>No entry data found"; } ?>
	</table>
	<!--- query ---->


	<!--- footer ---->
	<div class="copy-right">
		<div class="container">
			<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2019 Parindex . All Rights Reserved </p>
		</div>
	</div>
	<!--- footer ---->

	</body>
	</html>
