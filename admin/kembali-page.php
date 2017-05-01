<?php
	include 'cekAdmin.php';

	$id= $_GET['id'];
	//get today's date
	$today = date('Y-m-d');

	//write a query to update that the book is returned
	$sql = "UPDATE peminjaman SET kembali='$today' WHERE id_peminjaman='$id'";

	$result = mysqli_query($connection, $sql);

	if($result){
		$returnSuccess=true;
	}else{
		$returnSuccess=false;
	}

	//write a query to show all in the table based on the id
	$sql ="SELECT * FROM buku b, anggota a, peminjaman p WHERE b.isbn = p.id_buku AND a.nis_nip = p.id_anggota AND p.id_peminjaman =  '$id'";

	$result = mysqli_query($connection, $sql);

	if(!$result){
		die("An error has occured");
	}

	$count = mysqli_num_rows($result);
	if($count==1){
		while($row = mysqli_fetch_assoc($result)) {
			$judul = $row["judul"];    
			$tgl_pinjam = $row["tgl_pinjam"];
			$tgl_kembali = $row["tgl_kembali"];
			$kembali = $row["kembali"];
		}
	}

	$tgl1 = $tgl_pinjam;
	$tgl2 = $tgl_kembali;
	$tgl3 = $kembali;
	$tgl_kembali = strtotime($tgl_kembali);
    $kembali = strtotime($kembali);
    $datediff = $tgl_kembali-$kembali;
    $datediff = $datediff/(60*60*24);   
    if($datediff>=0){
    	//means the book is returned on time
    	$late = false;
    }else{
    	//menas the book is returned late
    	//we have to calculate the fine
    	//fine is number of days x 500
    	$late = true;
    	$datediff=abs($datediff);
    	$denda = $datediff*500;
    }
?>


<!DOCTYPE html>
<html>
<html lang="en">
  <head>
  	<link rel="icon" type="image/png" href="images/36.png">
    <title>SeL Admin</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
	<div class="container">
		<div class="well well-lg">
			<div class="alert alert-info">
			<?php
			if($returnSuccess){
				echo "<div class='alert alert-success'><p><strong>Buku berhasil dikembalikan!</strong></p>".
				"<p>Buku <i>$judul</i> dipinjam tanggal $tgl1 dan harus dikembalikan tanggal $tgl2.</p></div>";
				if($late){
					echo "<div class='alert alert-warning'><p>Pengembalian dilakukan tanggal $tgl3 sehingga terlambat $datediff hari.</p>".
					"<p><strong>Denda sebesar Rp $denda.</strong></p></div>";	
				}else{
					echo "<div class='alert alert-info'>Buku dikembalikan tepat waktu.</div>";
				}
				
			}else{
				echo "<p class='text-warning'>Buku gagal dikembalikan.</p>";
			}
			

			?>
			<a href="daftar_peminjaman.php" class="btn btn-info">Kembali</a>
		</div>
	</div>
	</div>

</body>
</html>
