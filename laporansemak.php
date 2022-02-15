<script>
function resizeText(multiplier) {
    var elem = document.getElementById("saiz");
    var currentSize = elem.style.fontSize || 1;
    if(multiplier==2)
    {
        elem.style.fontSize = "1em";
    } 
    else 
    {
        elem.style.fontSize = ( parseFloat(currentSize) + (multiplier * 0.2)) + "em";
    }
}
    
</script>

<?php
include('conn.php');
?>

<html>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    
   
    <body>
        <section class="senaraitempahan">
         
    <table class="table3" id="saiz">
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
        $pilihan = $_POST["pilihan"];
            $nodestinasi=$_POST["nodestinasi"];
            $bulan=$_POST["bulan"];
        $tahun=2020;
        $senarai = array("DUMMY","JAN","FEB","MAC","APR","MEI","JUN","JUL","OGO","SEP","OKT","NOV","DIS");
        $namabulan = $senarai[$bulan];
        $sql = "select * from pembelian
          join destinasi on pembelian.nodestinasi = destinasi.nodestinasi
          join kabin on pembelian.nokabin = kabin.nokabin
          join pelanggan on pembelian.nokp = pelanggan.nokp";
        
        switch($pilihan){
            case 1 : $syarat="";
                $tajuk = "LAPORAN KESELURUHAN"; break;
            case 2 : $syarat="where pembelian.nodestinasi = '$nodestinasi'";
                $tajuk = "LAPORAN MENGIKUT DESTINASI"; break;
            case 3 : $syarat= "where MONTH(tarikhberlepas) = $bulan or MONTH(tarikhpulang) = $bulan";
                $tajuk = "LAPORAN BULAN $namabulan"; break;
            case 4 : $syarat= "where pembelian.nodestinasi = '$nodestinasi' and (MONTH(tarikhberlepas) = $bulan or MONTH(tarikhpulang)= $bulan)";
                $tajuk = "LAPORAN BULAN $namabulan DAN MENGIKUT DESTINASI";break;
                
        }
        $bil = 1;
        $jumlah_keseluruhan = 0;
        $sql = $sql." ".$syarat;
        $data = mysqli_query($conn,$sql);
          while($belian = mysqli_fetch_array($data)){
              
                   
           ?>
        <tr>
        <td><?php echo $bil; ?></td>
        <td><?php echo $belian['namadestinasi'];?></td>
        <td><?php echo $belian['jeniskelaskabin'];?></td>
        <td><?php echo date("d/m/y", strtotime ($belian['tarikhberlepas']));?></td>
        <td><?php echo date("d/m/y", strtotime ($belian['tarikhpulang']));?></td>
        <td><?php echo date("h:ia", strtotime ($belian['masa']))?></td>
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
        <tr>
        <td colspan=10 align="right"> JUMLAH KESELURUHAN </td>
        <td>RM <?php echo number_format($jumlah_keseluruhan,2);?> </td>
        
        
        </tr>
           
        <h3 class="tajuksenaraicarian"><?php echo $tajuk; ?></h3>
        <div class="icon1">
            <center>
    <p> Gunakan butang ini untuk membesarkan dan mengecilkan saiz text</p>
    <i class="ion-ios-refresh " name='reSize1' type='button' value='reset' onclick="resizeText(2)"></i>
    <i class="ion-minus-circled " name='reSize2' type='button' value='&nbsp;-&nbsp;' onclick="resizeText(-1)"></i>
    <i class="ion-plus-circled " name='reSize' type='button' value='&nbsp;+&nbsp;' onclick="resizeText(1)"></i>
            </center>
           </div>
        
        </table>
            <div class="positionbutton">
                <form action="backtoadmin.php" method="post">
            <button class="adminbutton" type="submit">Kembali Ke Page Admin</button>
                    </form>
                </div>
            </section>
    

    </body>


</html>