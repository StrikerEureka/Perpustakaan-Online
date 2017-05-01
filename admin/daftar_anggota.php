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
                <h3>Daftar Anggota</h3>
              </div>
            </div>

            <div class="clearfix"></div>

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
    <table class="table table-hover table-bordered">
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>NIS/NIP</th>
					<th>Jenis kelamin</th>
					<th>Status</th>
					<th>Kelas</th>
					<th>Jurusan</th>
					<th>Indeks</th>
					<th>Tanggal Masuk</th>
					<th>Action</th>
				</tr>
<?php
	
	//if category and keyword already have values
	//then proceed the following by showing ONLY what user requests		
	if(isset($_GET['category'])&&isset($_GET['keyword'])){
		$category = $_GET['category'];
		$keyword = $_GET['keyword'];

		//search for data in table anggota where category contains keyword
		$sql = "SELECT * FROM anggota WHERE $category LIKE '%$keyword%'";
		$result = mysqli_query($connection, $sql); 
		if($result){
			$count=mysqli_num_rows($result);	
		}else{
			die("Maaf, tidak ditemukan data yang cocok dengan keyword Anda.");
		}
		

	//if category and keyword are still null
	//then proceed the following by showing all data stored in database	
	}else{
		$sql = "SELECT * FROM anggota";
		$result = mysqli_query($connection, $sql); 
		
		$count=mysqli_num_rows($result);	
	}

	if($count>0){
		$number = 1;	
		
		echo "<p>$count data ditampilkan.<p>";
		
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row["nis_nip"];
	        echo "<tr> <td>" . $number. "</td><td> " . 
	        $row["nama"]. "</td><td> " .
	        $row["nis_nip"]."</td><td>".
	        $row["jenis_kelamin"]."</td><td>".
	        $row["status"]."</td><td>".
			$row["kelas"]."</td><td>".
	        $row["jurusan"]."</td><td>".
			$row["indeks"]."</td><td>".
	        $row["tgl_masuk"]."</td><td>".
	        
			"<a href='edit_anggota.php?id=$id' role='button' class='btn btn-info btn-sm'>Edit</a>".
	        "<a href='delete_anggota.php?id=$id' role='button' class='btn btn-danger btn-sm'>Hapus</a></td></tr>";
			
		   $number++;
	    }
	}else{
		echo "Maaf, tidak ditemukan data yang cocok.";
		
	}
?>
			</table>
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