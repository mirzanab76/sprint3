<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$q = mysqli_query($conn, "SELECT * FROM pemilik WHERE username='$username' and password='$password'");
$r = mysqli_fetch_array ($q);

$sql = mysqli_query($conn, "SELECT * FROM pegawai WHERE username='$username' and password='$password'");
$rows = mysqli_fetch_array ($sql);

$q2 = mysqli_query($conn, "SELECT * FROM pelanggan WHERE username='$username' and password='$password'");
$row = mysqli_fetch_array ($q2);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['id_pemilik'] = $r['id_pemilik'];
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    header('location:pemilik/index.php');
}elseif(mysqli_num_rows($sql) == 1){
    $_SESSION['id_pegawai'] = $rows['id_pegawai'];
    $_SESSION['username'] = $rows['username'];
    $_SESSION['password'] = $rows['password'];
    header('location:pegawai/index.php');
}elseif (mysqli_num_rows($q2) == 1) {
    $_SESSION['id_pelanggan'] = $row['id_pelanggan'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header('location:pelanggan/index.php');
}else {
    //echo "Login Gagal";
    echo "<script>alert('Username atau Password yang anda masukkan salah!');window.location='index.php';</script>";
}
?>