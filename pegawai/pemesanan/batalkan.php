<?php
include '../../koneksi.php';

    $orderid = $_GET['orderid'];

    $sql = $conn -> query ("update keranjang set status='Pembatalan' where orderid='".$orderid."'");

?>

<script type="text/javascript">
    window.location.href="index.php";
</script>