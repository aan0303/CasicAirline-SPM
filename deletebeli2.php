<?php 
 include('conn.php');
$idbelian = $_GET['idtiket_form'];
$sql = "delete from pembelian where idtiket = $idbelian";
$result = mysqli_query ($conn,$sql);
if($result)
    echo"<script>alert('Berjaya padam tempahan')</script>";
else 
    echo"<script>alert('Tidak berjaya padam tempahan')</script>";
echo "<script>window.location='home2.php#tempahan'</script>";
?>