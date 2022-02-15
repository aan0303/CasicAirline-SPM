

<?php 
include('conn.php');
?>
<html lang="en">
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet"> 
        
        <title>Casic Airline Admin</title>
        
    </head>   
    
    
    <body>
        
       <header>
           <nav>
               <div class="row">
                   
                   <ul class="nav">
                       <li> <a href="#KemaskiniData">Kemaskini Data</a></li>
                       <li> <a href="#RekodTempahan">Rekod Tempahan</a></li>
                       <li> <a href="#CarianRekodTempahan">Carian Rekod Tempahan</a></li>
                       <li> <a href = "#import">Import</a></li>
                       
                   </ul>
                   
                   </div>
           </nav>
                   <div class="loginadmin">
                       <h1> Casic Airline Admin</h1>
                       <h2> Now everyone can fly</h2>
                       <h2 class="appreciation"> Selamat datang ke website anda</h2>
                  </div>   
        </header>  
        
        <section class="kemaskinidata js--section-kemaskinidata" id="KemaskiniData">
            
           
            
            <table class="table1" > 
                <h3> Senarai Kelas Kabin</h3>
                
              
                
                 
                    
                
                
                <tr> 
                <th>Nombor</th>
                <th>Nama Kelas Kabin</th>
                <th>Harga Kabin</th>
                <th>Operasi</th>
                </tr>
                
            <?php 
                $sql = "select * from kabin";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                    
                    ?>
                <tr>
                    <td><?php echo $kabin['nokabin'];?></td>
                    <td><?php echo $kabin['jeniskelaskabin'];?></td>
                    <td><?php echo $kabin['hargakabin'];?></td>
                    <td>
                     <a href="addkabin.php?nokabin=<?php echo $kabin['nokabin'];?>">
                         <i class="ion-edit ion-nopower"></i>
                     </a>
                     <a href="delkabin.php?nokabin=<?php echo $kabin['nokabin'];?>">
                         <i class="ion-trash-b ion-nopower"></i>
                        </a>
                    </td>
                
                </tr>
                    
            <?php    } ?>
            
            
            
            </table>
            
    
            
            <table class="table1"> 
                <h3 class="tabledestinasi"> Senarai Destinasi</h3>
                
                <tr> 
                <th>Nombor</th>
                <th>Nama Destinasi</th>
                <th>Harga Destinasi</th>
                <th>Operasi</th>
                </tr>
            <?php 
                $sql = "select * from destinasi";
                $data = mysqli_query($conn, $sql);
                while ($destinasi = mysqli_fetch_array($data)){
                    
                    ?>
                <tr>
                    <td><?php echo $destinasi['nodestinasi'];?></td>
                    <td><?php echo $destinasi['namadestinasi'];?></td>
                    <td><?php echo $destinasi['hargadestinasi'];?></td>
                    <td>
                     <a href="adddestinasi.php?nodestinasi=<?php echo $destinasi['nodestinasi'];?>">
                         <i class="ion-edit ion-nopower"></i>
                     </a>
                     <a href="deldestinasi.php?nodestinasi=<?php echo $destinasi['nodestinasi'];?>">
                         <i class="ion-trash-b ion-nopower"></i>
                        </a>
                    </td>
                
                </tr>
                    
            <?php    } ?>
            
            
            
            </table>
            

        </section>
        <section class="rekodtempahan" id="RekodTempahan">
            
                      
            
            
        <div class="row">
            <h3 class="rekodtempah"> Senarai Rekod Tempahan </h3>
            </div>
            <table class="table1">
            <tr>
                <th>Bil</th>
                <th>Kabin</th>
                <th>Tarikh Berlepas</th>
                <th>Tarikh Pulang</th>
                <th>Masa</th>
                <th>Destinasi</th>
                <th>Nama</th>
                <th>Operasi</th>
                
                </tr>
                
                 <?php 
                
                include ('conn.php');
                $bil = 1;
                $sql = "select * from pembelian
                join destinasi on pembelian.nodestinasi = destinasi.nodestinasi
                join kabin on pembelian.nokabin = kabin.nokabin
                join pelanggan on pembelian.nokp = pelanggan.nokp";
                $data = mysqli_query($conn, $sql);
                while ($belian = mysqli_fetch_array($data)){
                    
                    ?>
            
            <tr>
                <td><?php echo $bil ?></td>
                <td><?php echo $belian['jeniskelaskabin'];?></td>
                <td><?php echo date("d/m/y", strtotime($belian['tarikhberlepas']));?></td>
                <td><?php echo date("d/m/y", strtotime($belian['tarikhpulang']));?></td>
                <td><?php echo date("h:ia", strtotime ($belian['masa']))?></td>
                <td><?php echo $belian['namadestinasi'];?></td>
                <td><?php echo $belian['namapelanggan'];?></td>
                <td>
                 <a href="deletebeli.php?idtiket_form=<?php echo $belian['idtiket'];?>">
                     <i class="ion-android-delete ion-nopower"></i> 
                </a>
                </td>
                </tr>
            <?php 
                    $bil = $bil +1;
                }
                ?>
            
            </table>
        
        
        
        </section>
        <section id="import">
        <center>
        <h3><b>Muat Naik Data Tayangan Secara Pukal</b></h3>
Sila Pilih Fail txt yang ingin diupload
<form  action='' method='POST' enctype='multipart/form-data'>
<input type='file' name='data_admin'>
<button type='submit' class="testbutton" name='btn-upload'>Muat Naik</button>
</form>

<?PHP 
if (isset($_POST['btn-upload']))
{
    # Memanggil fail connection.php dari folder luaran
    include ('conn.php');
    # mengambil nama sementara fail
    $namafailsementara=$_FILES["data_admin"]["tmp_name"];
    # mengambil nama fail
    $namafail=$_FILES['data_admin']['name'];
    # mengambil jenis fail
    $jenisfail=pathinfo($namafail,PATHINFO_EXTENSION);   
    # menguji jenis fail dan saiz fail
    if($_FILES["data_admin"]["size"]>0 AND $jenisfail=="txt")
    {
        # membuka fail yang diambil
        $fail_data=fopen($namafailsementara,"r");

        # mendapatkan data dari fail baris demi baris
        while (!feof($fail_data)) 
        {   
            # mengambil data sebaris sahaja bg setiap pusingan
            $ambilbarisdata = fgets($fail_data);
    
            #memecahkan baris data mengikut tanda pipe
            $pecahkanbaris = explode("|",$ambilbarisdata);
            
            # selepas pecahan tadi akan diumpukan kepada 4
            list($nodestinasi,$namadestinasi,$hargadestinasi) = $pecahkanbaris;
            
            # arahan SQl untuk menyimpan data
            $arahan_sql_simpan= "insert into destinasi (nodestinasi, namadestinasi, hargadestinasi) values ('$nodestinasi','$namadestinasi','$hargadestinasi')";            
            
            # memasukkan data kedalam jadual admin
            $laksana_arahan_simpan=mysqli_query($conn, $arahan_sql_simpan);     
            echo"<script>alert('import fail Data Selesai.');
            window.location.href='admin2.php#import';</script>";            
        }                  
    fclose($fail_data);
    }
    else  {
        echo"<script>alert('hanya fail berformat txt sahaja dibenarkan');</script>";
    }
}
?> 
          </center>                    
    </section>
       
        
        <section id="CarianRekodTempahan">
                      

            
        <?php 
            include('conn.php');
            ?>
            <form action="laporansemak.php" method="post">
            <h3>Pilihan Untuk Semak Laporan</h3>
                <table class="table1" id="saiz">
                    <tr>      
                    <th>Destinasi</th>
                    <th>Bulan</th>
                    <th>Jenis Laporan</th>
                    </tr>
                    <tr>
                    <td>
                        
                        <select name="nodestinasi">
                        <?php 
                            $sql = "select * from destinasi";
                            $data = mysqli_query($conn,$sql);
                            while ($destinasi = mysqli_fetch_array($data)){
                                echo"<option value='$destinasi[nodestinasi]'>$destinasi[namadestinasi]</option>";    
                            }
                            ?>
                        </select>
                        </td>
                    <td>
                        <select name="bulan">
                        <?php 
                            $bulan= array("Januari","Febuari","Mac","April","Mei","Jun","Julai","Ogos","Septembar","Oktober","November","Disember");
                            for($i= 0; $i < 12; $i++){
                                $b = $i + 1;
                                echo"<option value = $b> $bulan[$i]</option>";
                            }
                            ?>
                        </select>
                        </td>
                    <td><select name="pilihan">
                        <option value=1>Semua Destinasi, Semua Bulan</option>
                        <option value=2>Mengikut Destinasi</option>
                        <option value=3>Mengikut Bulan</option>
                        <option value=4>Mengikut Destinasi dan Bulan</option>
                        </select>
                        </td>
                    </tr>               
                </table>
                <div class="buttonku">
                <button class="testbutton" type="submit">Papar</button>
                    </div>
            </form>
        
    </section>
        </body>
</html>

<style> 
    
   
}</style>