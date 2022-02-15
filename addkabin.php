<?php include('conn.php');
if(isset($_POST['nokabin'])){
    $nokabin = $_POST['nokabin'];
    $jeniskelaskabin = $_POST['jeniskelaskabin'];
    $harga = $_POST['hargakabin'];
    $sql = "insert into kabin values ('$nokabin','$jeniskelaskabin','$harga')";
    $result = mysqli_query($conn, $sql);
    if ($result)
        echo "<script> alert('Rekod berjaya di tambah')</script>";
    else 
        echo "<script> alert('Rekod tidak berjaya ditambah')</script>";
    echo "<script>window.location='admin2.php#KemaskiniData'</script>";
}
?>

<html>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

<body>
    <header>
    <section>
    <div class="tambahkabin">
    <h3 class="pokemon"> Tambah Kabin Baru</h3>
        <form action="addkabin.php" method="post">
    <div class="row">
    <div class="col span-1-of-3">
        <label>No. Kabin</label>
        </div>
        <div class="col span-2-of-3>">
        <input type="text" name="nokabin">
        </div>
        
    </div>
    <div class="row">
    <div class="col span-1-of-3">
        <label>Nama Kelas Kabin</label>
        </div>
        <div class="col span-2-of-3">
        <input type="text" name="jeniskelaskabin">
        </div>
        
    </div>
    <div class="row">
    <div class="col span-1-of-3">
        <label>Harga Kabin</label>
        </div>
        <div class="col span-2-of-3">
        <input type="text" name="hargakabin">
        </div>
        </div>
    
    
    
<div class="add2">
    <button class="add" type="submit">Tambah</button>
    </div>
            </form>
    </div>
        

        
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/script.js"></script>
        </header>
</body>
    

</html>