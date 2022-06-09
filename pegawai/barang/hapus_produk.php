<?php
include '../../koneksi.php';

    $id_barang = @$_GET['id_barang'];

    $sql = $conn -> query ("DELETE FROM barang WHERE id_barang='".$id_barang."'");

    header("location: produk.php");

?>

<script type="text/javascript">
    window.location.href="produk.php";

</script>




