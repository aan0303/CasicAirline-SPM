<?php 
include('conn.php');
$nodestinasi = $_GET['nodestinasi'];
$sql="delete from destinasi where nodestinasi='$nodestinasi'";
$result = mysqli_query($conn,$sql);
if ($result)
    echo "<script>alert('Berjaya padam rekod')</script>";
else
    echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='admin2.php#KemaskiniData'</script>";
?>