<?php
session_start();
include '../koneksi.php';
$orderid = $_GET['id'];
$liatcust = mysqli_query($conn,"select * from pelanggan p, keranjang k where orderid='$orderid' and p.id_pelanggan=k.id_pelanggan ");
$checkdb = mysqli_fetch_array($liatcust);
date_default_timezone_set("Asia/Bangkok");

$idorder= 0;
if (isset($_GET['id'])) {
    $idorder = $_GET['id'];
}

if (isset($_POST['confirm'])) {
    $ui = $_SESSION['id_pelanggan'];
    $veriforder = mysqli_query($conn,"select * from keranjang where orderid='$idorder'");
    $fetc = mysqli_fetch_array($veriforder);
    $liat = mysqli_num_rows($veriforder);

    if ($fetc>0) {
        $nama = $_POST['nama'];
        $metode = $_POST['metode'];
        $tanggal = $_POST['tanggal'];
        $gambar = $_FILES['gambar']['name'];

        
        if($gambar != ""){
            $ekstensi_diperbolehkan = array('png','jpg','jpeg');
            $x = explode('.', $gambar);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar']['tmp_name'];
            $angka_acak = rand(1, 999);
            $nama_gambar_baru = $angka_acak.'-'.$gambar;

            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
             move_uploaded_file($file_tmp, '../bukti/'.$nama_gambar_baru);
             
                $query = "SELECT * FROM konfirmasi WHERE id_pelanggan='$ui'";
                $result = mysqli_query($conn, $query);
                if(!$result->num_rows <= -1) {
                    $query = "insert into konfirmasi (orderid, id_pelanggan, payment, namarekening, tanggal_bayar,gambar) values ('$idorder','$ui','$metode','$nama','$tanggal','$nama_gambar_baru')";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $up = mysqli_query($conn,"update keranjang set status='membayar' where orderid='$idorder'");
                        echo "<script>alert('Konfirmasi berhasil! silahkan tunggu dikonfirmasi');window.location='pemesanan.php';</script>";
                    }else { echo "<script>alert('Gagal melakukan konfirmasi!');window.location='pemesanan.php';</script>";
                    }
                    } else {
                        echo "<script>alert('Gagal melakukan konfirmasi');window.location='pemesanan.php';</script>";
                }
                }else{
                    echo "<script>alert('Gagal menambahkan');window.location='pemesanan.php';</script>";
                }
            }else{
                echo "<script>alert('ekstensi gambar hanya bisa jpg dan png');</script>";
            }
                    
        }else{
            $query = "insert into konfirmasi (orderid, id_pelanggan, payment, namarekening, tglbayar) values ('$idorder','$ui','$metode','$nama','$tanggal'";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
            }else{
                echo "<script>alert('Data berhasil ditambahkan!');window.location='index.php';</script>";
            }
        }

        
}
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="../Assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../Assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="../Assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../Assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="../Assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="../Assets/css/svg-weather.css" rel="stylesheet">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../Assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="../Assets/css/responsive.css">

    <!-- Custom styles for this template -->
    <link href="../Assets/css/sidebars.css" rel="stylesheet">

    <title>Keranjang Belanja</title>
</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.php" class="logo"><b>Kres.co PELANGGAN</b></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">
                    <ul class="top-nav">
                        <!-- User Menu-->
                        <li class="dropdown" style="padding-left: 800px;">
                            <a href="profil.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="../Assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                                <span>
                                    <?php
                                    $no = 1;
                                    $sql = $conn->query("SELECT * FROM pelanggan WHERE username ='$_SESSION[username]'");
                                    while ($data = $sql->fetch_assoc()) {
                                    ?>
                                        <b><?php echo $data['username'] ?></b> <?php  } ?>
                                    <i class=" icofont icofont-simple-down"></i></span>
                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <a style="text-decoration: none; color: black;" href="profil.php">
                                    <li><i class="icon-user"></i> Profile</li>
                                </a>
                                <a style="text-decoration: none; color: black;" href="../logout.php">
                                    <li><i class="icon-logout"></i> Keluar</li>
                                </a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print">
            <section class="sidebar" id="sidebar-scroll">
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level"></li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="index.php">
                            <i class="icon-speedometer"></i><span> Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-level"></li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="keranjang.php">
                            <i class="icon-briefcase"></i><span> Keranjang</span>
                        </a>
                    </li>
                    <li class="nav-level"></li>
                    <li class="active treeview">
                        <a class="waves-effect waves-dark" href="pemesanan.php">
                            <i class="icon-briefcase"></i><span> Pemesanan</span>
                        </a>                
                    </li>


                    </li>
                </ul>
            </section>
        </aside>

        <!-- Konten -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Konfimasi Pembayaran</h4>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
												<thead>
													<tr>
														<th>No</th>
														<th>Nama Produk</th>
														<th>Ukuran/Variasi</th>
														<th>Jumlah</th>
														<th>Harga</th>
													<tr>                                                    

												</thead>
												<tbody>


                                                <?php
      
                                                $no = 1;
                                                $brg = mysqli_query($conn,"select * from detail d, barang b where orderid='$orderid' and d.id_barang=b.id_barang order by d.id_barang asc");
												while($r=mysqli_fetch_array($brg)){
													$total = $r['qwe'] * $r['harga'];

                                                    $result = mysqli_query($conn,"select sum(d.qwe*b.harga) as count from detail d, barang b where orderid='$orderid' and d.id_barang=b.id_barang order by d.id_barang asc");
                                                    $row = mysqli_fetch_assoc($result);
                                                    $cekrow = mysqli_num_rows($result);
                                                    $count = $row['count'];
                                                ?>

                                                <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= ucwords($r['nama_barang']) ?></td>
                                                <td><?= ucwords($r['ukuran']) ?></td>
                                                <td><?= ucwords ($r['qwe'] )?></td>
                                                <td>Rp. <?php echo number_format ($r['harga'])?></td>
                                    	
                                                </tr>
                                                <?php   
                                                }
                                                ?>
                                                </tbody>
                                            <tfoot>
											<tr>
												<th colspan="4" style="text-align:right">Ongkir</th>
												<th>Rp. <?php 
												$ongkir = $checkdb['id_ongkir'];
												$result1 = mysqli_query($conn,"SELECT o.tarif AS count FROM ongkir o, detail d, barang b where o.id_ongkir='$ongkir'and orderid='$orderid' and d.id_barang=b.id_barang order by d.id_barang ASC");
												$cekrow = mysqli_num_rows($result1);
												$row1 = mysqli_fetch_assoc($result1);
												$count = $row1['count'];
												if($cekrow > 0){
													echo number_format($count);
													} else {
														echo 'No data';
													}?></th>
											</tr>
                                            <tr>
												<th colspan="4" style="text-align:right">Total + Ongkir</th>
												<th>Rp. <?php 
												$ongkir = $checkdb['id_ongkir'];
												$result1 = mysqli_query($conn,"SELECT SUM(d.qwe*b.harga)+o.tarif AS count FROM ongkir o, detail d, barang b where o.id_ongkir='$ongkir'and orderid='$orderid' and d.id_barang=b.id_barang order by d.id_barang ASC");
												$cekrow = mysqli_num_rows($result1);
												$row1 = mysqli_fetch_assoc($result1);
												$count = $row1['count'];
												if($cekrow > 0){
													echo number_format($count);
													} else {
														echo 'No data';
													}?></th>
											</tr>
										</tfoot>
                                    </table>

                <form method="post" enctype="multipart/form-data">
                    <h6 class=" pb-2"> Nama Pemilik Rekening</h6>
					<input type="text" class="form-control" name="nama" placeholder="Nama Pemilik Rekening / Sumber Dana" required>
					<br>
					<h6 class=" pb-2">Rekening Tujuan</h6>
					<select name="metode" class="form-control">
						
						<?php
						$metode = mysqli_query($conn,"select * from metode_pembayaran");
						
						while($a=mysqli_fetch_array($metode)){
						?>
							<option value="<?php echo $a['metode'] ?>"><?php echo $a['metode'] ?> | <?php echo $a['norek'] ?></option>
							<?php
						};
						?>
						
					</select>
					<br>
					<h6 class=" pb-2">Tanggal Bayar</h6>
					<input type="date" class="form-control" name="tanggal" required="required">
                    <br>
                    <h6 class=" pb-2">Bukti Transfer</h6>
                    <input type="file" class="form-control" name="gambar" required><br>
					<input type="submit" class="btn btn-primary" name="confirm" value="Submit"> &emsp;
                    <a class="btn btn-danger" href="index.php">Batal</a>
				</form>
			</div>
			<div class="register-home">
				
			</div>
		</div>
	</div>
    <br>

        <!-- Required Jqurey -->
        <script src="../Assets/plugins/Jquery/dist/jquery.min.js"></script>
        <script src="../Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../Assets/plugins/tether/dist/js/tether.min.js"></script>

        <!-- Required Fremwork -->
        <script src="../Assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Scrollbar JS-->
        <script src="../Assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../Assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

        <!--classic JS-->
        <script src="../Assets/plugins/classie/classie.js"></script>

        <!-- notification -->
        <script src="../Assets/plugins/notification/js/bootstrap-growl.min.js"></script>

        <!-- Sparkline charts -->
        <script src="../Assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

        <!-- Counter js  -->
        <script src="../Assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../Assets/plugins/countdown/js/jquery.counterup.js"></script>

        <!-- Echart js -->
        <script src="../Assets/plugins/charts/echarts/js/echarts-all.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>

        <!-- custom js -->
        <script type="text/javascript" src="../Assets/js/main.min.js"></script>
        <script type="text/javascript" src="../Assets/pages/dashboard.js"></script>
        <script type="text/javascript" src="../Assets/pages/elements.js"></script>
        <script src="../Assets/js/menu.min.js"></script>
        <script>
            var $window = $(window);
            var nav = $('.fixed-button');
            $window.scroll(function() {
                if ($window.scrollTop() >= 200) {
                    nav.addClass('active');
                } else {
                    nav.removeClass('active');
                }
            });
        </script>

</body>

</html>