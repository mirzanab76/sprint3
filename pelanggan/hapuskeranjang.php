<?php
session_start();

include '../koneksi.php';

$id_detail = $_GET['id_detail'];
$sql = $conn -> query ("DELETE FROM detail WHERE id_detail='".$id_detail."'");

    header("location: keranjang.php");

?>
<script type="text/javascript">
    window.location.href="keranjang.php";

</script>