<?php
	require 'config/connection.php';
	session_start();

	$username = $_POST['fUsername'];
	$password = $_POST['fPassword'];

	$sql = "SELECT * FROM anggota WHERE nis_nip='$username' AND nis_nip='$password'";
	$result = mysqli_query($connection, $sql); 
	
	$count=mysqli_num_rows($result);

	if($count==1){
		
		$row = mysqli_fetch_assoc($result);
		$_SESSION["login"] = "yes";
		$_SESSION["id"] = $row['id_anggota'];
		$_SESSION["nama"] = $row['nama'];
		$_SESSION["nis_nip"] = $row['nis_nip'];
		$_SESSION["jurusan"] = $row['jurusan'];
		$_SESSION["jenis_kelamin"] = $row['jenis_kelamin'];
		//login success
		//navigate to admin page
		header("Location: member/index.php");
	}else if($count==0){
		$username = $_POST['fUsername'];
	$password = $_POST['fPassword'];

	$sqls = "SELECT * FROM petugas WHERE nip='$username' AND password='$password'";
	$results = mysqli_query($connection, $sqls); 
	
	$counts=mysqli_num_rows($results);

	if($counts==1){
		
		$row = mysqli_fetch_assoc($results);
		$_SESSION["login"] = "yes";
		$_SESSION["id_petugas"] = $row['id_petugas'];
		$_SESSION["nama"] = $row['nama'];
		$_SESSION["nip"] = $row['nip'];
		$_SESSION["jenis_kelamin"] = $row['jenis_kelamin'];
		//login success
		//navigate to admin page
	header("Location: admin/index.php");}
	else{
		//either the username or password is wrong
		//navigate back to index
		$_SESSION["error"]="found";
		header("location: index.php");
	}
	}else{
		//either the username or password is wrong
		//navigate back to index
		$_SESSION["error"]="found";
		header("location: index.php");
	}
?>