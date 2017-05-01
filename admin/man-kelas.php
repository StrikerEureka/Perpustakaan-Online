<?php
require_once("session.php");
require_once('class.admin.php');	
	$auth_user = new ADMIN();
	
	
	$id_admin = $_SESSION['admin_session'];
	
	$stmt = $auth_user->runQuery("SELECT * FROM admin WHERE id_admin=:id_admin ");
	$stmt->execute(array(":id_admin"=>$id_admin));
	
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<?php
	require_once('../guru/class.guru.php');
		$akun_guru = new GURU();
		$stmt = $akun_guru->runQuery("SELECT * FROM kelas ORDER BY kelas");
		$stmt->execute();
    
	$data=$stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Manajemen Kelas : Aplikasi Ujian Online SMK N 7</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="SHORTCUT ICON" href="../system/img/stembase-logo-black.png">
<link rel="stylesheet" href="../system/css/bootstrap.min.css" />
<link rel="stylesheet" href="../system/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../system/css/uniform.css" />
<link rel="stylesheet" href="../system/css/select2.css" />
<link rel="stylesheet" href="../system/css/css-style.css" />
<link rel="stylesheet" href="../system/css/css-media.css" />
<link href="../system/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="#">Ujian Online SMK 7 Semarang</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Selamat Datang Administrator</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
		<li>
		<div class="profile">
              <div class="profile_pic">
                <img src="<?php print($userRow['foto']); ?>" alt="..." class="img-circle profile_img">
              </div>
		</li>
		<li>
		<div class="profile_info">
                <center><h4><?php print($userRow['nama']); ?></h4> </center>
              </div>
		</li>
        <li class="divider"></li>
        <li><a href="profiladmin.php?id=<?php echo $userRow['id_admin']?>"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="logout.php?logout=true"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="dashboard-admin.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
	<li><a href="man-admin.php"><i class="icon icon-user-md"></i> <span>Manajemen Admin</span></a></li>
	<li><a href="man-guru.php"><i class="icon icon-user"></i> <span>Manajemen Guru</span></a></li>
    <li class="active"><a href="man-kelas.php"><i class="icon icon-th"></i> <span>Manajemen Kelas</span></a></li>
    <li> <a href="man-ujian.php"><i class="icon icon-folder-open"></i> <span>Manajemen Ujian</span></a></li>
     <li><a href="rekapnilai.php"><i class="icon icon-inbox"></i> <span>Rekap Nilai</span></a></li>

  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard-admin.php" title="Kembali ke Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Manajemen Kelas</a> </div>
    <h1>Manajemen Kelas</h1>
  </div>

  <div class="container-fluid">
    	
<?php
include("../require_db/excel_reader2.php");


 mysql_connect("localhost","root","");
 mysql_select_db("db_ujian");

 if(isset($_POST['upload'])){
	 
	 
 $dataq = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $dataq->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris ketiga, karena baris pertama adalah nama kolom
 for ($i=5; $i<=$baris; $i++) {
 //membaca data nama (kolom ke-2)
 $nama = $dataq->val($i,3);
 //membaca data nis (kolom ke-3)
 $nis = $dataq->val($i,4);
 //membaca data kls (kolom ke-4)
 $kls = $dataq->val($i,29);
 $jurusan = $dataq->val($i,30);
 $indeks = $dataq->val($i,31);
 $kelasq = $kls." ".$jurusan." ".$indeks;
 $email = '';
 $id='';
 
 $katasandi = $nis;
 $pass = $nis;
 $password = password_hash($pass, PASSWORD_DEFAULT);			


 $no_telp='';
 $th_masuk='';
 $foto='../system/img/user-pict.png';
 $joining_date='';
 $blokir='N';
 $level='siswa';
 
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO users 
 (user_id,nis,user_email,user_pass,nama,kelas,kls,jurusan,indeks,no_telp,th_masuk,foto,joining_date,blokir,level,katasandi)
 values('$id','$nis','$email','$password','$nama','$kelasq','$kls','$jurusan','$indeks','$no_telp','$th_masuk','$foto','$joining_date','$blokir','$level','$katasandi')";
 $hasil = mysql_query($query);
 
//menambah counter jika berhasil atau gagal
 if($hasil) $sukses++;
 else $gagal++;
 
}
 					

 //tampilkan report hasil import
 
 echo "<div class='alert alert-info alert-block'>";
 echo '<a class="close" data-dismiss="alert" href="#">x</a>';
 echo '<h4 class="alert-heading">Berhasil !</h4><br>';
 echo "Jumlah data yang sukses diimport : ".$sukses."<br>";
 echo "Jumlah data yang gagal diimport : ".$gagal."";
 echo "</div>";

 }

?>

	<div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> 
		<i class="icon-align-justify"></i> </span>
          <h5>Upload Data Siswa</h5>
        </div>
        <div class="widget-content nopadding">
          <form method="post" class="form-horizontal" onSubmit="return validateForm()" enctype="multipart/form-data">
		  <div class="control-group">
			<label class="control-label">File Excel (harus .xls)</label>
				<div class="controls">
				<input type="file" id="userfile" name="userfile" />
				</div> 
          </div>
          <div class="form-actions">
              <input type="submit" name="upload" value="Upload Data" class="btn btn-success">
			</div>
          </form>
		  <script type="text/javascript">
		//    validasi form (hanya file .xls yang diijinkan)
			function validateForm()
			{
				function hasExtension(inputID, exts) {
					var fileName = document.getElementById(inputID).value;
					return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
				}
		 
				if(!hasExtension('userfile', ['.xls'])){
					alert("Hanya file XLS (Excel 2003) yang diijinkan.");
					return false;
				}
			}
		</script>
        </div>
      </div>
	 </div>
	 </div>

<hr>
	<a href="tambahsiswa.php"><button class="btn btn-primary"><i class="icon icon-plus"></i> Tambah Siswa Secara Manual</button></a></li>
	<p>
    <?php
			if(isset($error))
			{
			 	foreach($error as $error)
			 	{
					 ?>
                     <div class="alert alert-danger alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
					<h4 class="alert-heading">Gagal !</h4>
					<?php echo $error; ?> </div>
                     <?php
				}
			}
			else if(isset($_GET['act']))
			{
				 ?>
                 <div class="alert alert-info alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
					<h4 class="alert-heading">Berhasil !</h4>
					Data siswa kelas <b><?php echo $_GET['act'] ?></b> telah dihapus  </div>
                 <?php
			}
		?>
	 <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Kelas</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
				  <th>Aksi</th>
                  <th>Kelas</th>
                </tr>
              </thead>
              <tbody>
				<?php foreach ($data as $value): ?>
					<tr class="gradeA">
					<td width="7%">
					  <div class="btn-group">
						  <button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">Action <span class="caret"></span></button>
						  <ul class="dropdown-menu">
							<li><a href="lihatsiswa.php?id=<?php echo $value['id_kelas'] ?>"><i class="icon icon-group"></i> lihat siswa</a></li>
							<li class="divider"></li>
							<li><a href="lihatguru.php?id=<?php echo $value['id_kelas'] ?>"><i class="icon icon-group"></i> lihat guru pengampu</a></li>
							<li class="divider"></li>
							<li><a href="delete-kelas.php?id=<?php echo $value['kelas']?>"><i class="icon icon-remove"></i> delete</a></li>
						  </ul>
						</div>
					  </td>
					  <td  style="vertical-align: middle;">
						<center><?php echo $value['kelas'] ?></center>
					  </td>
					</tr>
					<?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> <a><?php echo date('Y');?> &copy; SMK Negeri 7 Semarang</a> </div>
</div>
<!--end-Footer-part-->
<script src="../system/js/jquery.min.js"></script> 
<script src="../system/js/jquery.ui.custom.js"></script> 
<script src="../system/js/bootstrap.min.js"></script> 
<script src="../system/js/jquery.uniform.js"></script> 
<script src="../system/js/select2.min.js"></script> 
<script src="../system/js/jquery.dataTables.min.js"></script> 
<script src="../system/js/uo.js"></script> 
<script src="../system/js/uo.tables.js"></script>
</body>
</html>
