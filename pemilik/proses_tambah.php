<?php 
include('../koneksi.php');

    $namaLengkap = $_POST["nama_lengkap"];
    $alamat = $_POST["alamat"];
    $noHP = $_POST["no_hp"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    if($password == $password2){
        $query = "SELECT * FROM pegawai WHERE username = '$username'";
        $result = mysqli_query($conn, $query);


    // cek username sudah ada atau belum
        if(!$result->num_rows > 0) {
            $query = "INSERT INTO pegawai (nama_lengkap, alamat, no_hp, email, username, password) VALUES ('$namaLengkap', '$alamat', '$noHP','$email', '$username', '$password')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
            }else{
                echo "<script>alert('Tambah data pegawai berhasil!');window.location='datapegawai.php';</script>";
            }
        }else{
        echo "<script>alert('Username sudah terpakai');window.location='tambah_pegawai.php';</script>";
        }
    }else{
        echo "<script>alert('Konfirmasi password tidak sesuai');window.location='tambah_pegawai.php';</script>";
    }

?>