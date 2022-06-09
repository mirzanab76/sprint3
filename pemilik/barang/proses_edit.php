<?php
    include('../../koneksi.php');

    $pilihan = $_POST['pilihan'];
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $ukuran = $_POST['ukuran'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $foto_barang = $_FILES['foto_barang']['name'];

    if($foto_barang != ""){
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $foto_barang);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto_barang']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak.'-'.$foto_barang;

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            move_uploaded_file($file_tmp, '../../produk/'.$nama_gambar_baru);

            $query = "UPDATE barang SET id_barang = '$id_barang', ukuran = '$ukuran', pilihan = '$pilihan', nama_barang = '$nama_barang', jumlah = '$jumlah', harga = '$harga', foto_barang = '$nama_gambar_baru' ";
            $query .= "WHERE id_barang = '$id_barang'";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
            }else{
                echo "<script>alert('Data berhasil diubah!');window.location='produk.php';</script>";
            }
            }else{
                echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='edit_produk.php';</script>";
            }
        }else{
            $query = "UPDATE barang SET id_barang = '$id_barang', ukuran = '$ukuran', pilihan = '$pilihan', nama_barang = '$nama_barang', jumlah = '$jumlah', harga = '$harga'";
            $query .= "WHERE id_barang = '$id_barang'";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
            }else{
                echo "<script>alert('Data berhasil diubah!');window.location='produk.php';</script>";
            }
        }
    
?>