<?php
	require "cekAdmin.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM anggota WHERE nis_nip = '$id'";
	
	$result = mysqli_query($connection, $sql); 
	$count=mysqli_num_rows($result);

	if($count==1){
	while($row = mysqli_fetch_assoc($result)){

?>

<!DOCTYPE html>
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

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
              <div class="navbar nav_title" style="padding-left: 0%">
              <a href="index.php" class="site_title"><img src="images/48.png">Admin Page</a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user.png" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <?php
				echo "<h2>Selamat datang,<br>".$_SESSION["nama"]."</h2>";
				?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
               <ul class="nav side-menu">
                   <li><a><i class="fa fa-edit"></i> Beranda <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Keanggotaan<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="daftar_anggota.php">Daftar Anggota</a></li>
                      <li><a href="tambah_anggota.php">Tambah Anggota</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i>Peminjaman<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="daftar_peminjaman.php">Daftar Peminjaman</a></li>
                      <li><a href="peminjaman.php">Peminjaman dan Pengembalian</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i>Buku<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="daftar_buku.php">Daftar Buku</a></li>
                      <li><a href="tambah_buku.php">Tambah Buku</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Keluar</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Anggota</h3>
              </div>
            </div>

            <div class="clearfix"></div>

 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Data Anggota<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
			<div id="notif">
			<!-- Message is show here -->
			</div>
                  <div class="x_content">
			<form id="demo-form2" class="form-horizontal form-label-left" method="POST">

			  	<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_anggota">ID Anggota</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="id_anggota" placeholder="ID anggota" class="form-control" id="id_anggota" value="<?php echo $row['id_anggota']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama">Nama</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" name="nama" placeholder="Nama" class="form-control" id="Nama" value="<?php echo $row['nama']; ?>" required>
					</div>
				</div>
				

				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nis_nip">NIS/NIP</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<input type="text" maxlength="30" name="nis_nip" placeholder="NIS (untuk siswa) / NIP (untuk guru)" class="form-control" id="nis_nip" value="<?php echo $row['nis_nip']; ?>" required>
					</div>
				</div>
				
				 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelas</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                        <select name="kelas">
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
						<option value="XIII">XIII</option>
						</select>
                          </div>
                        </div>
                 </div>

				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jurusan">Kompetensi Keahlian</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<select name="jurusan">
						<option value="TKR">T. Kendaraan Ringan</option>
						<option value="TP">T. Permesinan</option>
						<option value="TITL">T. Instalasi Tenaga Listrik</option>
						<option value="TEI">T. Elektronika Industri</option>
						<option value="TAV">T. Audio Video</option>
						<option value="TME">T. Mekatronika</option>
						<option value="TGB">T. Gambar Bangunan</option>
						<option value="TKBB">T. Konstruksi Batu dan Beton</option>
						<option value="TKJ">T. Komputer dan jaringan</option>
					</select>
					</div>
				</div>
				
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Indeks</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                        <select name="indeks">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						</select>
                          </div>
                        </div>
                 </div>
				
				
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<select name="status">
						<option value="Siswa">Siswa</option>
						<option value="Guru">Guru</option>
						<option value="Lainnya">Lainnya</option>
					</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="jenis_kelamin">Jenis kelamin</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
					<select name="jenis_kelamin">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
					</div>	
				</div>

				<?php
				}
	}
?>
		
		<div class="form-group">
				<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
				<a role="button" class="btn btn-primary" id="resetButton" href="daftar_anggota.php">Cancel</a>
				<button class="btn btn-primary" type="reset">Reset</button>
				<input type="submit" class="btn btn-success" value="Submit" name="editAnggota">
				</div>
			</form>
		</div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
       
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="../vendors/cropper/dist/cropper.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>

<?php

	if(isset($_POST['editAnggota'])){
		//if it is, then proceed to the following

		$id_anggota = $_POST['id_anggota'];
		$nama = $_POST['nama'];
		$nis_nip = $_POST['nis_nip'];
		$kelas = $_POST['kelas'];
		$jurusan = $_POST['jurusan'];
		$indeks = $_POST['indeks'];
		$status = $_POST['status'];
		$jenis_kelamin = $_POST['jenis_kelamin'];

		//update data to database
		$sql = "UPDATE anggota SET id_anggota='$id_anggota', nama='$nama', nis_nip='$nis_nip', kelas='$kelas', jurusan='$jurusan', indeks='$indeks', status='$status', jenis_kelamin='$jenis_kelamin' WHERE nis_nip='$id'";

		try{
			$result = mysqli_query($connection, $sql);	
		}catch(Exception $errorMessage){
			echo "Error :".$errorMessage;
		}
		

		if($result){
			echo "<script> alert('Data berhasil di perbarui.');</script>";
			header("Location: daftar_anggota.php");
		}else{
			echo "<script>alert('Data gagal diperbarui. Silahkan cek kembali.');</script>";
		}
	}
?>