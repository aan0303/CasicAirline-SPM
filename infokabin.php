 <?php 
                $sql = "select * from kabin where jeniskelaskabin = 'Ekonomi' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>


<p class="infokabin"> <?php echo $kabin['jeniskelaskabin'];?> <br> RM<?php echo $kabin['hargakabin'];?>  </p>

<?php    } ?> 