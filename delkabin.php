<?php 
include('conn.php');
$nokabin = $_GET['nokabin'];
$sql="delete from kabin where nokabin='$nokabin'";
$result = mysqli_query($conn,$sql);
if ($result)
    echo "<script>alert('Berjaya padam rekod')</script>";
else
    echo "<script>alert('Tidak berjaya padam rekod')</script>";
echo "<script>window.location='admin2.php#KemaskiniData'</script>";
?>
