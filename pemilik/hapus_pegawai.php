<?php
include '../koneksi.php';

    $id = @$_GET['id_pegawai'];

    $sql = $conn -> query ("DELETE FROM pegawai WHERE id_pegawai = '".$id."'");

    header("location: datapegawai.php");

?>

<script type="text/javascript">
    window.location.href="datapegawai.php";
</script>




