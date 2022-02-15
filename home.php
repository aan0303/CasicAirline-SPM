<?php
session_start();
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
                        <li> <a  href="#pendaftaran"> Pendaftaran</a></li>
                    </ul>
                </div>
            </nav>
            
        <div class="texton-image">
            <h1> Casic Airline</h1>
            <h2> Now everyone can fly</h2>
         </div>

            <div class="random-text">
            <p class="random"> "The Best Airline for Private Transportation Service -Tony Fernandes!"</p>
            </div>
      
<div class="sign-in">
            <div class="row">
                <form method="post" action=userlogin.php class="contact-form">
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label> Nama </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="namapengguna" placeholder="Nama Anda"  required>
                    </div>
                 </div>
               
            
            <div class="row">
                    <div class="col span-1-of-3">
                        <label> Katalaluan </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <input type="password" name="katalaluanpengguna" placeholder="Katalaluan"  required>
                    </div>
                 </div>
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label> NO. KP </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="nokp" placeholder="NO. KP"  required>
                    </div>
                 </div>
                    
                <div class="row">
                    <div class="col span-1-of-3">
                        <label> &nbsp; </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <button class="login" type="submit" >Log Masuk</button>
                    </div>
                 </div>
              </form>                          
           </div>  
    </div>
        </header>
        <section class="signup js--scroll-signup" id="pendaftaran">
                <div class="row">
                <h6>Pendaftaran</h6>
                </div>
<div class="sign-up">
            <div class="row">
                <form method="post" action=signup.php class="contact-form">
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label> Nama </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="nama" placeholder="Nama Anda"  required>
                    </div>
           </div>
                    
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label> Katalaluan </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <input type="password" name="katalaluan" placeholder="Katalaluan"  required>
                    </div>
                 </div>
                    <div class="row">
                    <div class="col span-1-of-3">
                        <label> NO.KP </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="nokp" placeholder="No. KP"  required>
                    </div>
                 </div>
                    
                <div class="row">
                    <div class="col span-1-of-3">
                        <label> &nbsp; </label>  
                    </div>
                    <div class="col span-2-of-3">
                        <button class="signupuser" type="submit">Daftar</button>
                        
                    </div>
                 </div>
              </form>                          
           </div>  
    </div>
            </section>
        
      
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="vendors/js/jquery.waypoints.min.js"></script>
        <script src="resources/js/script.js"></script>
        
    </body>
</html>