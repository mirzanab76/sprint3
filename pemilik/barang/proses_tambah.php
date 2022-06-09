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

            $query = "INSERT INTO barang (id_barang, nama_barang, ukuran, jumlah, harga, pilihan, foto_barang) VALUES ('$id_barang', '$nama_barang', '$ukuran', '$jumlah', '$harga', '$pilihan', '$nama_gambar_baru')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
            }else{
                echo "<script>alert('Data berhasil ditambahkan!');window.location='produk.php';</script>";
            }
            }else{
                echo "<script>alert('Ekstensi gambar hanya bisa jpg dan png!');window.location='tambah_produk.php';</script>";
            }
        }else{
            $query = "INSERT INTO barang (id_barang, nama_barang, ukuran, jumlah, harga, pilihan) VALUES ('$id_barang', '$nama_barang', '$ukuran', '$jumlah', '$harga', '$pilihan')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die("Query Error: ".mysqli_errno($conn)."-".mysqli_error($conn));
            }else{
                echo "<script>alert('Data berhasil ditambahkan!');window.location='produk.php';</script>";
            }
        }
    
?>

