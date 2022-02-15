<?PHP
# Langkah 2 Menyemak kewujudan data POST
if(!empty($_POST))
{
    # Langkah 3 memanggil fail connection
    include ('conn.php');
    
    # Langkah 4 mengambil data POST
    $nama=$_POST['nama'];
    $katalaluan=$_POST['katalaluan'];
    $nokp=$_POST['nokp'];
     
    
    # Langkah 5 semak data nokp empty atau tidak
    
    
     if(strlen($nokp)!=12 or !is_numeric($nokp))
    {
        die("<script>alert('Ralat pada nokp');
        window.history.back();</script>");
    }
    

    # Langkah 9 menyediakan penyataan SQL utk simpan data
    $arahan_insert= "INSERT INTO pelanggan
    (nokp,namapelanggan,katalaluan)
    values
    ('$nokp','$nama','$katalaluan')";
    
    # Langkah 10 melaksanakan penyataan arahan SQL untuk menyimpan data
    if(mysqli_query($conn,$arahan_insert))
    {
        # Langkah 11 Data berjaya disimpan & sistem akan buka fail login.php untuk log masuk
        echo "<script>alert('Data Berjaya Disimpan.');
        window.location.href='home.php';</script>";
    }
    else
    {   
        # Langkah 12 Data Gagal disimpan. Sistem kembali ke laman sebelumnya
        echo "<script>alert('Maaf! Data Gagal Disimpan');
        window.history.back();</script>";
    }
}
?>
