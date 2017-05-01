<?php
	require "cekAdmin.php";
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
	$id= $_GET['id'];
	$sql = "SELECT * FROM peminjaman p, anggota a WHERE a.id_anggota='$id'";
	$result = mysqli_query($connection, $sql);
	if($result){
		//first, fetch the nis_nip of the member
		while($row = mysqli_fetch_assoc($result)){
			$nis_nip = $row["id_anggota"];
			$kembali = $row["kembali"];
			//if kembali is still empty it means the member is still borrowing some book
			//show message that the member cannot be deleted
			if(!isset($kembali)){
				echo "Maaf, anggota tidak dapat dihapus jika masih ada buku yang dipinjam.";
				//break and stop the program here
				return;
			}
			//if all the books borrowed have been returned, proceed the following
		}
		//first delete all the loans ever done
		$sql = "DELETE FROM peminjaman WHERE id_anggota='$id' and kembali is not null";
		$result= mysqli_query($connection, $sql);
		if($result){
			//then delete the member
			$sql = "DELETE FROM anggota WHERE nis_nip = '$id'";
			$result = mysqli_query($connection, $sql); 
			if($result){
				echo "Anggota berhasil dihapus.";
				
			}else{
				echo "Gagal dihapus. Masih ada buku pinjaman yang belum dikembalikan.";
				
			}
		}else{
			echo "An error has occured";
		}
		
	}else{
		echo "An error has occured";
	}
	
?>	
		</div>
		<a href="daftar_anggota.php" class="btn btn-info">Kembali</a>
		</div>
	</div>
</body>
</html>