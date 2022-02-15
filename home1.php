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
    <title> Casic Airline</title>
    </head>
    
    <body>
    
        <header>
            
            <nav>
                <div class="row">  
                    <img src="resources/css/img/logo12345.jpg.png" class="logo">
                    <img src="resources/css/img/logo12345.jpg.png" class="logo-black">
                    <ul class="nav">
                        <li> <a  href="#kelaskabin">Kelas Kabin </a></li>
                        <li> <a  href="#destinasi"> Destinasi</a></li>
                        <li> <a href="#tempahan">Tempahan</a></li>
                        <li> <a href="home.php">Login/Pendaftaran</a></li> 
                    </ul>
                </div>
            </nav>
            
        <div class="texton-image">
            <h1> Casic Airline</h1>
            <h2> Now everyone can fly</h2>
            <h2 class="loginuser"> Selamat Datang Ke Website Kami</h2>
         </div>

            <div class="random-text">
            <p class="random"> "The Best Airline for Private Transportation Service -Tony Fernandes!"</p>
            </div>
      
          </header>
        <section class="homepage2 js--homepage2">
            
            <div class="row">
                <h3> Salah satu syarikat penerbangan terbaik di Malaysia ! </h3>
                <p class="random-text2"> Syarikat ini memberikan pelbagai jenis kemudahan kepada pengguna yang ingin pergi beriadah ke kawasan lain. Antaranya ialah :-</p>
                
            <div class="col span-1-of-4 box">
                <i class="ion-clock icon-power"></i>
                <h4> Masa Penerbangan </h4>
                <p> Anda boleh memilih tarikh masa berlepas dan pulang pada bila-bila masa. </p>
            </div>
                
            <div class="col span-1-of-4 box">
                <i class="ion-card icon-power"></i>
                <h4> 3 Jenis kelas kabin </h4>
                <p> Anda boleh memilih 3 jenis kelas kabin iaitu, Perniagaan, Ekonomi, dan Suite Perniagaan. Setiap kelas mempunyai harga dan kelebihan yang berlainan. Jadi, anda boleh memilih mengikut kemampuan anda.</p>
            </div>
                
            <div class="col span-1-of-4 box">
                <i class="ion-fireball icon-power"></i>
                <h4> Destinasi yang hangat </h4>
                <p> Antara destinasi yang hangat pada masa kini, ialah Tokyo, Melbourne, dan Taipei. Jadi jangan lepaskan peluang emas ini!</p>
            </div>
                
            <div class="col span-1-of-4 box">
                <i class="ion-cash icon-power"></i>
                <h4> Harga yang berpatutan </h4>
                <p> Walaupun anda memilih kelas kabin Suite Perniagaan, harganya adalah sangat murah berbanding dengan harga yang ditawarkan oleh Syarikat lain.</p>
            </div>
        </div>
    </section>
        
    
        <section class="homepage3 js--section-homepage3" id="kelaskabin">
            
           
            <h5>  Antara jenis kelas kabin yang disediakan oleh syarikat kami</h5>
            
        <ul class="cabin clearfix"> 
            
            <?php 
                $sql = "select * from kabin where jeniskelaskabin = 'Ekonomi' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>
            
         <li>
            <figure class="cabin-photos">
             <img src="resources/img/1.jpg"> 
             </figure> <p class="infokabin"> <?php echo $kabin['jeniskelaskabin'];?> <br> RM<?php echo $kabin['hargakabin'];?>  </p>

          
        </li>
            <?php    }?>
        <li>
            
            <figure class="cabin-photos">
             <img src="resources/img/2.jpg">
            </figure>   
    </li>
           <?php 
                $sql = "select * from kabin where jeniskelaskabin = 'Perniagaan' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>  
        <li>
            <figure class="cabin-photos">
             <img src="resources/img/3.jpg">
            </figure><p class="infokabin"> <?php echo $kabin['jeniskelaskabin'];?> <br> RM<?php echo $kabin['hargakabin'];?>  </p>
        </li>
            <?php    }?>
        <li>
            <figure class="cabin-photos">
             <img src="resources/img/4.jpg">
            </figure>
        </li>   
        </ul>
            
      <ul class="cabin clearfix">  
          
        <?php 
                $sql = "select * from kabin where jeniskelaskabin = 'Eksklusif Ekonomi' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>  
         <li>
            <figure class="cabin-photos">
             <img src="resources/img/5.jpg">
            </figure> <p class="infokabin"> <?php echo $kabin['jeniskelaskabin'];?> <br> RM<?php echo $kabin['hargakabin'];?>  </p>
        </li>
            <?php    }?>
        <li>
            <figure class="cabin-photos">
             <img src="resources/img/6.jpg">
            </figure>
        </li>
            <?php 
                $sql = "select * from kabin where jeniskelaskabin = 'Suite Perniagaan' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>  
        <li>
            <figure class="cabin-photos">
             <img src="resources/img/7.jpg">
            </figure><p class="infokabin"> <?php echo $kabin['jeniskelaskabin'];?> <br> RM<?php echo $kabin['hargakabin'];?>  </p>
        </li>
            <?php    }?>
        <li>
            <figure class="cabin-photos">
             <img src="resources/img/8.jpg">
            </figure>
        </li>   
        </ul>
                
        </section>
        
            
        
        <section class="homepage4 js--section-homepage4" id="destinasi">
            <h5> Antara destinasi yang paling hangat pada masa kini</h5>
            <ul class="destinasi clearfix">
                  <?php 
                $sql = "select * from destinasi where namadestinasi = 'Hong Kong' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>  
            <li>
                <figure class="destinasi-photos">
                    <img src="resources/img/9.jpg">
                </figure> <p class="infokabin"> <?php echo $kabin['namadestinasi'];?> <br> RM<?php echo $kabin['hargadestinasi'];?>  </p>
            </li>
                <?php    }?>
                
                  <?php 
                $sql = "select * from destinasi where namadestinasi = 'Malaysia' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>
            <li>
                <figure class="destinasi-photos">
                    <img src="resources/img/10.jpg">
                </figure><p class="infokabin"> <?php echo $kabin['namadestinasi'];?> <br> RM<?php echo $kabin['hargadestinasi'];?>  </p>
            </li>
                 <?php    }?>
                <?php 
                $sql = "select * from destinasi where namadestinasi = 'Taiwan' LIMIT 1";
                $data = mysqli_query($conn, $sql);
                while ($kabin = mysqli_fetch_array($data)){
                  
              ?>
                
            <li>
                <figure class="destinasi-photos">
                    <img src="resources/img/11.jpg">
                </figure><p class="infokabin"> <?php echo $kabin['namadestinasi'];?> <br> RM<?php echo $kabin['hargadestinasi'];?>  </p>
            </li>
                <?php    }?>
            </ul>    
        </section>
        
        <section class="homepage123 js--section-homepage5" id="tempahan">
        <form action="backtohome2.php">
            <div class="button">
            
                <button class="tempah" type="submit">Daftar/Log Masuk</button>
                
            
         </div>
            </form>
            <div class="checkout">
            <div class="row">
            <h6> Tempah tiket penerbangan anda sekarang !</h6>
            <p class="randomtext123">Maaf, anda perlu mendaftar atau log masuk sebagai salah seorang pengguna untuk website ini jika anda mahu meneruskan pembelian tiket.  </p>
            </div>
            </div>
                
           
            </section>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/script.js"></script>
        
    </body>
</html>