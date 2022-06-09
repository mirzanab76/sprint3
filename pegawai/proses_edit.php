<?php 
    include('../koneksi.php');

    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

            $query = "UPDATE pegawai SET nama_lengkap = '$nama_lengkap', alamat = '$alamat', no_hp = '$no_hp', email = '$email', username = '$username', password = '$password' WHERE username = '$username'";
        
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
            }else{
                echo "<script>alert('Data berhasil diubah!');window.location='profil.php';</script>";
            }
?>