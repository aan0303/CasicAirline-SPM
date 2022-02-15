<?php

session_start();

?>
<?php

include('conn.php');
if(isset($_POST['namapengguna'])){ 
    
    $username = $_POST['namapengguna'];
    $_SESSION['namapengguna'] = $username;
    $password = $_POST['katalaluanpengguna'];
    $nokp = $_POST['nokp'];
    $sql = "SELECT * FROM pelanggan";
    $result = mysqli_query($conn, $sql);
    $find =false;
    while ($admin = mysqli_fetch_array($result)){
      if ($admin["namapelanggan"]== $username
      && $admin["katalaluan"]== $password && $admin["nokp"]== $nokp)
      $find = true;
        
    
    }
    
    if ($find == true)
        
        header("location: home2.php");
    else
    echo " <script>
    alert('Terdapat kesalahan pada username atau password');
    window.location='home.php'</script>";
    
}

//testing a comment

?>
   