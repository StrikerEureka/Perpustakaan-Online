<?php
	require "cekAdmin.php";
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
                <h3>Tambah Anggota</h3>
              </div>
            </div>

            <div class="clearfix"></div>

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Anggota<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
				<div id="notif">
			<!-- Message is show here -->
				</div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" required="required" class="form-control col-md-7 col-xs-12" id="nama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIS/NIP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nis_nip" required="required" class="form-control col-md-7 col-xs-12" id="nis_nip">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                        <select name="status">
						<option value="Siswa">Siswa</option>
						<option value="Guru">Guru</option>
						</select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                        <select name="jenis_kelamin">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
						</select>
                          </div>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kompetensi Keahlian</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
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
						</select>
                          </div>
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
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <input type="submit" class="btn btn-success" value="Submit" name="insertAnggota">
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
			
			 <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Import Anggota dengan File Excel<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
				<div id="notif">
			<!-- Message is show here -->
				</div>
                  <div class="x_content">
                   
<?php
include("excel_reader.php");


 mysql_connect("localhost","root","");
 mysql_select_db("perpustakaan");

 if(isset($_POST['upload'])){
	 
	 
 $dataq = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
 //membaca jumlah baris dari data excel
 $baris = $dataq->rowcount($sheet_index=0);
 
//nilai awal counter jumlah data yang sukses dan yang gagal diimport
 $sukses = 0;
 $gagal = 0;
 
//import data excel dari baris ketiga, karena baris pertama adalah nama kolom
 for ($i=5; $i<=$baris; $i++) {
 //membaca data nama
 $nama = $dataq->val($i,3);
 //membaca data nis
 $nis_nip = $dataq->val($i,4);
 //membaca data jurusan
 $kelas = $dataq->val($i,29);
 $jurusan = $dataq->val($i,30);
 $indeks = $dataq->val($i,31);
 $status = "Siswa";
 //membaca data jenis_kelamin
 $jenis_kelamin = $dataq->val($i,6);
//setelah data dibaca, sisipkan ke dalam tabel pegawai
 $query = "INSERT INTO anggota (nama, nis_nip, kelas, jurusan, indeks, status, jenis_kelamin, tgl_masuk)
 values('$nama','$nis_nip', '$kelas', '$jurusan', '$indeks', '$status', '$jenis_kelamin', NOW())";
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
    <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Data Siswa</span>
	</label>
	<div class="col-md-6 col-sm-6 col-xs-12">
	<form method="post" id="demo-form2" class="form-horizontal form-label-left" onSubmit="return validateForm()" enctype="multipart/form-data">
	<label>File Excel (harus .xls)</label>
	<input type="file" id="userfile" name="userfile"/>
	</div>
	</div>
	<br><br>
		   <div class="ln_solid"></div>
          <div class="form-group">
		   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <input type="submit" name="upload" value="Upload Data" class="btn btn-success">
			</div>
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
	//first check if post insertAnggota has value
	if(isset($_POST['insertAnggota'])){
		//if it is, then proceed to the following
		$nama = $_POST["nama"];
		$nis_nip = $_POST["nis_nip"];
		$jenis_kelamin = $_POST["jenis_kelamin"];
		$kelas = $_POST["kelas"];
		$jurusan = $_POST["jurusan"];
		$indeks = $_POST[indeks];
		$status = $_POST["status"];

		$sql = "INSERT INTO anggota (nama, nis_nip, jenis_kelamin, kelas, jurusan, indeks, status, tgl_masuk) VALUES ('$nama', '$nis_nip', '$jenis_kelamin', '$kelas', '$jurusan', '$indeks', '$status', NOW() );";
		
		$result = mysqli_query($connection, $sql); 

		if($result){
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");

	var show = "<div class='alert alert-success'><p><strong>Sukses!</strong> Data berhasil masuk.</p>";
	show+="<p><a href='daftar_anggota.php' class='btn btn-success'> Lihat semua anggota.</a></p></div>";
	notif.innerHTML = show;
</script>

<?php
		}else{
		//if inserting data fails, show error notification	
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-warning'><p><strong>Gagal!</strong> Terjadi kesalahan. Data tidak berhasil masuk.</p>";
	show+="<a href='daftar_anggota.php'>Lihat semua anggota.</a>";
	notif.innerHTML = show;
</script>
	</div>
</body>
</html>

<?php
		}
	}
?>