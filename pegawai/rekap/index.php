<?php
session_start();
include '../../koneksi.php';


$q = $conn->query("SELECT * FROM keranjang where status ='selesai'");

if (isset($_POST['submit'])) {
    $bln = date($_POST['bulan']);
    $thn = date($_POST['tahun']);
   
    if (!empty($bln)) {
     // perintah tampil data berdasarkan periode bulan
     $q = mysqli_query($conn, "SELECT * FROM keranjang WHERE MONTH(tanggal) = '$bln' and year(tanggal) = '$thn' and status ='selesai'");
     $t = mysqli_query($conn, "SELECT * FROM keranjang WHERE year(tanggal) = '$thn'");
     $j = mysqli_query($conn, "SELECT * FROM keranjang WHERE MONTH(tanggal) = '$bln' and year(tanggal) = '$thn' and status ='selesai' ");
    } else {
     // perintah tampil semua data
     $q = mysqli_query($conn, "SELECT * FROM keranjang p where status ='selesai'");
     $t = mysqli_query($conn, "SELECT * FROM keranjang t where status ='selesai'");
    }
   } else {
    // perintah tampil semua data
    $q = mysqli_query($conn, "SELECT * FROM keranjang where status ='selesai'");
    $t = mysqli_query($conn, "SELECT * FROM keranjang where status ='selesai'");
   }

$s = $q->num_rows;
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
    <link rel="stylesheet" type="text/css" href="../../Assets/icon/themify-icons/themify-icons.css">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="../../Assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="../../Assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../../Assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="../../Assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

    <!-- Weather css -->
    <link href="../../Assets/css/svg-weather.css" rel="stylesheet">

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../../Assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="../../Assets/css/responsive.css">

    <!-- Custom styles for this template -->
    <link href="../../Assets/css/sidebars.css" rel="stylesheet">

    <title>Rekapitulasi Transaksi</title>
</head>

<body class="sidebar-mini fixed">
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div class="wrapper">
        <!-- Navbar-->
        <header class="main-header-top hidden-print">
            <a href="index.php" class="logo"><b>Kres.co PEGAWAI</b></a>
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

                <!-- Navbar Right Menu-->
                <div class="navbar-custom-menu f-right">
                    <ul class="top-nav">
                        <!-- User Menu-->
                        <li class="dropdown" style="padding-left: 800px;">
                            <a href="profil.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="../../Assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                                <span>
                                    <?php
                                    $no = 1;
                                    $sql = $conn->query("SELECT * FROM pegawai WHERE id_pegawai ='$_SESSION[id_pegawai]'");
                                    while ($data = $sql->fetch_assoc()) {
                                    ?>
                                    <b><?php echo $data['username'] ?></b> <?php  } ?>
                                    <i class=" icofont icofont-simple-down"></i></span>
                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <a style="text-decoration: none; color: black;" href="../profil.php">
                                    <li><i class="icon-user"></i> Profile</li>
                                </a>
                                <a style="text-decoration: none; color: black;" href="../../logout.php">
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
                    <a class="waves-effect waves-dark" href="../index.php">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="../barang/produk.php">
                        <i class="icon-briefcase"></i><span> Barang</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="../pemesanan/index.php">
                        <i class="icofont icofont-files"></i><span> Pemesanan</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index.php">
                        <i class="icofont icofont-wallet"></i><span> Rekapitulasi</span>
                    </a>                
                </li>
            </ul>
            </section>
        </aside>

        <!-- Konten -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="main-header">
                        <h4>Rekapitulasi Transaksi</h4>
                    </div>
                </div>
                <br><form method="POST" action="" class="form-inline">
       <label for="date1">Tampilkan transaksi :&nbsp;</label>
       <select class="form-control mr-2" name="bulan">
        <option value="">Bulan</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
       </select>
       <select class="form-control mr-2" name="tahun">
        <option value="">Tahun</option>
        <?php

        $qry=mysqli_query($conn, "SELECT tanggal FROM keranjang GROUP BY year(tanggal)");
        while($t=mysqli_Fetch_array($qry)){
            $data = explode('-',$t['tanggal']);
            $thn = $data[0];
            echo "<option value='$thn'>$thn</option>";
                                                	}
                                                	?>
       </select>
        <button type="submit" name="submit" class="btn btn-icon">
			<i class="icofont icofont-search"></i>
	    </button>
      </form>
      
      <?php
                                                $no = 1;
                                                $brg = mysqli_query($conn,"select * from keranjang k, pelanggan p where k.id_pelanggan=p.id_pelanggan and status='Selesai' order by id_keranjang ASC");
												$subtotal = 0;
                                                while($r=mysqli_fetch_assoc($brg)){    
											    $orderid = $r['orderid'];
                                                $ongkir = $r['id_ongkir'];
                                                $result = mysqli_query($conn,"select sum(d.qwe*b.harga)+o.tarif as count from ongkir o, detail d, barang b where o.id_ongkir='$ongkir' and d.orderid='$orderid' and b.id_barang=d.id_barang order by d.id_barang asc");
                                                $cekrow = mysqli_num_rows($result);
                                                $row = mysqli_fetch_assoc($result);
                                                $count = $row['count'];
                                                $subtotal += $count;
                                                ?>
                                                <?php   
                                                    }
                                                    ?>
                                                    <br>
												<h6 colspan="3" class="text-dark" style="text-align:left"> Total seluruh transaksi : Rp <b><?php echo number_format($subtotal) ?></b></h6>
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
				<tr>
				    <th>No</th>
					<th>Kode Order</th>
					<th>Tanggal</th>
				    <th>Total Harga</th>
				</tr>                                                    

			</thead>
		    <tbody>
                <?php
      
                                                $no = 1;
                                                while ($r = $q->fetch_assoc()) {
                                                ?>

                                                <tr>
                                                <td><?= $no++ ?></td>
                                                <td>#<?= ucwords($r['orderid']) ?></td>
                                                <td><?= date('d/F/Y', strtotime($r['tanggal'])) ?></td>
                                                <td>Rp. <?php 
												$ongkir = $r['id_ongkir'];
												$result1 = mysqli_query($conn,"select sum(d.qwe*b.harga)+o.tarif AS count from ongkir o, detail d, barang b where o.id_ongkir = '$ongkir' and orderid='".$r['orderid']."' and b.id_barang=d.id_barang order by d.id_barang ASC");
												$cekrow = mysqli_num_rows($result1);
												$row1 = mysqli_fetch_assoc($result1);
												$count = $row1['count'];
												if($cekrow > 0){
													echo number_format($count);
													} else {
														echo 'No data';
													}?></td>
                                    	
                                                </tr>
                                                <?php   
                                                }
                                                ?>
                    </table>



        <!-- Required Jqurey -->
        <script src="../../Assets/plugins/Jquery/dist/jquery.min.js"></script>
        <script src="../../Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="../../Assets/plugins/tether/dist/js/tether.min.js"></script>

        <!-- Required Fremwork -->
        <script src="../../Assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Scrollbar JS-->
        <script src="../../Assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="../../Assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

        <!--classic JS-->
        <script src="../../Assets/plugins/classie/classie.js"></script>

        <!-- notification -->
        <script src="../../Assets/plugins/notification/js/bootstrap-growl.min.js"></script>

        <!-- Sparkline charts -->
        <script src="../../Assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

        <!-- Counter js  -->
        <script src="../../Assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../../Assets/plugins/countdown/js/jquery.counterup.js"></script>

        <!-- Echart js -->
        <script src="../../Assets/plugins/charts/echarts/js/echarts-all.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/highcharts-3d.js"></script>

        <!-- custom js -->
        <script type="text/javascript" src="../../Assets/js/main.min.js"></script>
        <script type="text/javascript" src="../../Assets/pages/dashboard.js"></script>
        <script type="text/javascript" src="../../Assets/pages/elements.js"></script>
        <script src="../../Assets/js/menu.min.js"></script>
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