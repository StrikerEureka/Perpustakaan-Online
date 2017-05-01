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
                <h3>Peminjaman dan Pengembalian Buku</h3>
              </div>
            </div>

            <div class="clearfix"></div>

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Peminjaman</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" class="form-horizontal form-label-left" method="POST">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_anggota">NIS/NIP Peminjam<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="id_anggota" id="id_anggota" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_buku">ISBN Buku<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="id_buku" name="id_buku" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tgl_pinjam" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Pinjam</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tgl_pinjam" class="form-control col-md-7 col-xs-12" type="date" name="tgl_pinjam">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="tgl_kembali" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Kembali<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tgl_kembali" name="tgl_kembali" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <input type="submit" class="btn btn-success" value="Submit" name="insertPeminjaman">
                        </div>
                      </div>

                    </form>
                  </div>
				  </div>
				  <div class="row">
				  <div class="col-md-12 col-sm-12 col-xs-12">
				   <div class="x_panel">
				  <div class="x_title">
                    <h2>Form Pengembalian<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
				 <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate method="POST" class="form-horizontal form-label-left">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_anggota">NIS/NIP Peminjam<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="id_anggota" id="id_anggota" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" class="btn btn-success" value="Lihat peminjaman" name="viewPeminjaman">
                        </div>
                      </div>
                    </form>
                  </div>
				</div>
				</div>
              </div>
			</div>
			</div>
        </div>

<?php
	//first check if post insertPeminjaman has value
	if(isset($_POST['insertPeminjaman'])){
		
		//catch error that may be created in the query process
		
			//if it is, then proceed to the following
			$id_anggota = $_POST["id_anggota"];
			$id_buku = $_POST["id_buku"];
			$tgl_pinjam = $_POST["tgl_pinjam"];
			$tgl_kembali = $_POST["tgl_kembali"];
			$id_petugas = $_SESSION["nip"];

			$sql = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_buku, id_anggota, id_petugas) VALUES ('$tgl_pinjam', '$tgl_kembali', '$id_buku', '$id_anggota', '$id_petugas')";
			
			$result = mysqli_query($connection, $sql); 	

		if($result){
?>

<script type="text/javascript">

	var notif = document.getElementById("notif");

	var show = "<div class='alert alert-success'><p><strong>Sukses!</strong> Data berhasil masuk.</p>";
	show+="<strong></strong>";
	show+="<p><a href='daftar_peminjaman.php' class='btn btn-success'> Lihat semua data peminjaman.</a></p></div>";
	notif.innerHTML = show;
</script>

<?php
		}else{
		//if inserting data fails, show error notification	
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-warning'><p><strong>Gagal!</strong> Terjadi kesalahan. Data tidak berhasil masuk.</p>";
	show += "<a href='daftar_peminjaman.php' class='btn btn-warning'>Lihat data semua peminjaman.</a>";
	notif.innerHTML = show;
</script>

<?php
		}
	}else if(isset($_POST['viewPeminjaman'])){
		//if it is, then proceed to the following
		$id_anggota = $_POST['id_anggota'];

		$sql = "SELECT * FROM buku b, anggota a, peminjaman p WHERE b.isbn = p.id_buku AND a.nis_nip = p.id_anggota AND p.id_anggota =  '$id_anggota'";

		$result = mysqli_query($connection, $sql);

		if($result){
			$count = mysqli_num_rows($result);		
		}else{
			die("Maaf, tidak ditemukan data yang cocok.");
		}
?>
		<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
				<div class="x_content">
			<table class="table table-hover table-bordered">
				<tr>
					<th>No.</th>
					<th>ISBN</th>
					<th>Judul buku</th>
					<th>Tanggal pinjam</th>
					<th>Tanggal kembali</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
<?php
	
		if($count>0){
			$number = 1;	
			
			echo "<p>$count buku telah dipinjam oleh anggota ber-NIP/NIS $id_anggota.<p>";
			
			while($row = mysqli_fetch_assoc($result)) {
				if(!isset($row["kembali"])){
					$status = "belum kembali";
					//$buttonStatus is to decide whether the button is clickable or not
					//it is clickable if the book is not yet returned
					$buttonStatus = "active";
		        }else{
		        	$status = "dikembalikan ".$row["kembali"];
		        	//it is unclickable if the book is already returned
		        	$buttonStatus = "disabled";
		        }

				$id = $row["id_peminjaman"];
		        echo "<tr> <td>" . $number. "</td><td> " . 
		        $row["isbn"]."</td><td>".
		        $row["judul"]. "</td><td> " .
		        $row["tgl_pinjam"]. "</td><td> " . 
		        $row["tgl_kembali"]. "</td><td> " .
		        $status. "</td><td> ".
		        //buttonStatus is used here as a parameter if the button is clickable or not
		        "<a href='kembali-page.php?id=$id' role='button' class='btn btn-primary $buttonStatus btn-sm'>Kembalikan</a></td></tr>";
				$number++;
			}
			
		}
	}
?>
			</table>
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

<script type="text/javascript">
	//source code : modified from http://jsfiddle.net/7LXPq/93/
	$(document).ready( function() {

		//create object Date
    	var now = new Date();
 		var day = ("0" + now.getDate()).slice(-2);
    	var month = ("0" + (now.getMonth() + 1)).slice(-2);
    	day = parseInt(day);

    	//default date is today
    	var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    	//set default date to tgl_pinjam
		$('#tgl_pinjam').val(today);

		//date to return book is a week after it's borrowed
		//so the default is today + 7
		var returnLoan = now.getFullYear()+"-"+(month)+"-"+(day+7);
		//set default date to tgl_kembali
		$('#tgl_kembali').val(returnLoan);

	});

</script>