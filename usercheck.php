<html>
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
<body>
    <section>
    <h3> Resit </h3>
    <table class="table1">
        <tr>
            <th>Bil</th>
            <th>Destinasi</th>
            <th>Kabin</th>
            <th>Tarikh Berlepas</th>
            <th>Tarikh Pulang</th>
            <th>Masa</th>
            <th>Nama</th>
            <th>NoKP</th>
            <th>Harga Kabin</th>
            <th>Harga Destinasi</th>
            <th>Jumlah Harga</th>
           
        </tr>
        
        <?php 
        date_default_timezone_set("Asia/Kuala_Lumpur");
        include('conn.php');
        $bil = 1;
        $sql = "SELECT * FROM pembelian
               join kabin on pembelian.nokabin = kabin.nokabin
               join destinasi on pembelian.nodestinasi = destinasi.nodestinasi
               join pelanggan on pembelian.nokp = pelanggan.nokp
               ORDER BY idtiket DESC limit 1";
        $jumlah_keseluruhan = 0;
        $data = mysqli_query($conn,$sql);
        while ($belian = mysqli_fetch_array($data)){
            
            
            ?>
        
        <tr>
            <td><?php echo $bil; ?></td>
        <td><?php echo $belian['namadestinasi'];?></td>
        <td><?php echo $belian['jeniskelaskabin'];?></td>
        <td><?php echo date("d/m/y", strtotime ($belian['tarikhberlepas']));?></td>
        <td><?php echo date("d/m/y", strtotime ($belian['tarikhpulang']));?></td>
        <td><?php echo date("h:ia", strtotime ($belian ['masa']))?></td>
        <td><?php echo $belian['namapelanggan'];?> </td>
        <td><?php echo $belian['nokp'];?></td>
        <td>RM <?php echo number_format($belian['hargakabin'],2);?></td>
        <td>RM <?php echo number_format($belian['hargadestinasi'],2);?></td>
        <td>RM <?php $jumlah_bayaran = $belian['hargakabin'] + $belian['hargadestinasi'];
                echo number_format($jumlah_bayaran,2);
                $jumlah_keseluruhan = $jumlah_keseluruhan + $jumlah_bayaran;
                $bil = $bil + 1;
           }
        ?>
            </td>
     
        </tr>
     <?php 
        
 $bil = $bil + 1;
        
        ?>
    
    </table>
        <form action="backtohome.php">
        <button class="buttonku3" type='submit'> Kembali ke Halaman Rumah </button>
        </form> 
    <p class="randomtext123"> Terdapat kesalahan? Sila hubungi admin untuk memadamnya.</p>

    </section>
    </body>



</html>