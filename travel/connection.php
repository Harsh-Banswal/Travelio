<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "db2";  
    $conn = mysqli_connect($servername, $username, $password, $db_name);
    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }
    echo "";
    
    ?>