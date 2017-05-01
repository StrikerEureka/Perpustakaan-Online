<?php
	require "cekAdmin.php"
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

	$sql = "DELETE FROM buku WHERE id_buku = '$id'";
	$result = mysqli_query($connection, $sql); 
	if($result){
		echo "<p class='alert alert-success'>Buku berhasil dihapus!</p>";
	}else{
		echo "<p class='alert alert-warning'>Buku masih dipinjam dan tidak dapat dihapus.</p>";
	}

?>	
		</div>
		<a href="daftar_buku.php" class="btn btn-info">Kembali</a>
		</div>
	</div>
</body>
</html>