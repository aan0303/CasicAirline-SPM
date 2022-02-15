<?php
include('conn.php');
if(isset($_POST['username_form'])){ 
    $username = $_POST['username_form'];
    $password = $_POST['password_form'];
    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn, $sql);
    $find =false;
    while ($admin = mysqli_fetch_array($result)){
      if ($admin["username"]== $username
      && $admin["password"]== $password)
          $find = true;
        
    
    }
    
    if ($find == true)
        header("location: admin2.php");
    else
    echo " <script>
    alert('Terdapat kesalahan pada username atau password');
    window.location='admin.html'</script>";
    
}  ?>
   
