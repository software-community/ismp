<?php
    $servername = 'localhost';
    $database = 'website';
    $username = 'root';
    $password = '';

    //create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if($conn){
     // do all your stuff that you want
}else{
   echo "db connection error because of".mysqli_connect_error();
}
    //Check connection
