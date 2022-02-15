<?php 
include('conn.php');
$idbelian = $_GET['idtiket_form'];
$sql = "delete from pembelian where idtiket = $idbelian";
$result = mysqli_query($conn, $sql);
if($result)
    echo "<script>alert('Berjaya Padam Rekod')</script>";
else
    echo "<script>alert('Tidak Berjaya Padam Rekod')</script>";
echo "<script>window.location='admin2.php#RekodTempahan'</script>";
?>