<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kres.co</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="resource/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="resource/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Kami</h6>
                        <span>Krescob1@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">                    
                        <h1 class="m-0 text-uppercase text-white"><i class="fa fs-1 text-dark me-3"></i>Kres.co</h1>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Hubungi Kami</h6>
                        <span>085234345456</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#registrasi" class="nav-item nav-link">Daftar</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#login" class="nav-item nav-link">Masuk</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header" style="padding-top: 100px !important;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="font-secondary text-primary mb-0">Super Kriuk</h1>
                    <h1 class="display-1 text-uppercase text-white mb-0">Zona Kerupuk</h1>
                    <h1 class="text-uppercase text-white">Pelengkap laukmu ada disini</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Jelajahi</h2>
                <h1 class="display-4 text-uppercase">Produk Terlaris</h1>
            </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="resource/img/bawang mentah.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">Rp. 12.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kerupuk Bawang Mentah</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="resource/img/terasi.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">Rp. 15.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kerupuk Terasi</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="resource/img/bawang.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">Rp. 15.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kerupuk Bawang</h5>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-6">
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="resource/img/udang mentah.jpg" alt="" style="width: 150px; height: 85px;">
                                        <h4 class="bg-dark text-primary p-2 m-0">Rp. 13.000</h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                        <h5 class="text-uppercase">Kerupuk Udang Mentah</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 90px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Kantor Utama</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Jl. Pattimura 28, Kediri</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">Krescob1@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">085234345456</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Cabang kami</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Jember</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Kalimantan</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tangerang</a>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">PPL B1</a>. Kres.co</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Modal Login-->
    <div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="staticBackdropLabel">Masuk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body">
                    <?php if(isset($error)) : ?>
                        <p style="color: red; font-style: italic">Username atau password yang anda masukkan salah!</p>
                    <?php endif; ?>
                    <form method="POST" class="login-form" id="login-form" action="ceklogin.php">
                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-account material-icons-name"></i>Username</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="" required/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i>Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="" required/>
                        </div>
                        <div class="form-group form-button pt-2">
                            <input class="form-control" type="submit" name="signin" id="signin" class="form-submit" href="index.php" value="Masuk"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Regist -->
    <div class="modal fade" id="registrasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="staticBackdropLabel">Daftar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                <div class="modal-body">
                    <form method="POST" class="regist-form" id="regist-form" action="proses_regis.php">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="" required/>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" placeholder="" required/>
                        </div>
                        <div class="form-group form-button pt-2">
                            <label for="no_hp">No HP</label>
                            <input class="form-control" type="tel" name="no_hp" id="no_hp" pattern="[0-9]{12,13}" placeholder="" required/>
                        </div>
                        <div class="form-group form-button pt-2">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="" required/>
                        </div>
                        <div class="form-group form-button pt-2">
                            <label for="username">Username</label>
                            <input class="form-control" type="username" name="username" id="username" placeholder="" required/>
                        </div>
                        <div class="form-group form-button pt-2">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="" required/>
                        </div>
                        <div class="form-group form-button pt-2">
                            <label for="password2">Konfirmasi Password</label>
                            <input class="form-control" type="password" name="password2" id="password2" placeholder="" required/>
                        </div>
                        <div class="form-group form-button pt-5">
                            <input class="form-control" type="submit" name="registrasi" id="registrasi" class="form-submit" href="index.php" value="Daftar"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="resource/lib/easing/easing.min.js"></script>
    <script src="resource/lib/waypoints/waypoints.min.js"></script>
    <script src="resource/lib/counterup/counterup.min.js"></script>
    <script src="resource/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="resource/js/main.js"></script>
</body>

</html>