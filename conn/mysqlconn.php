<?php
        $servername = "plearnjai.com";
        $username = "plearnaja_cpsu1";
        $password = "ykvuXxBJ4q";
        $dbname = "plearnja_cpsu1";
       
       // Create connection
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       
       // Set Charset
       mysqli_set_charset($conn, "utf8");
       
       // Check connection
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
?>