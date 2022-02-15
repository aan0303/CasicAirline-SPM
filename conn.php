<?php
$conn = mysqli_connect('localhost', 'root', '', 'casicairline');

if (!$conn){
    echo 'connection error: ' . mysqli_connect_error();
}
?> 