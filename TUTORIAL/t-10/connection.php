<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tutorial";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        echo "";
    }
    else
    {
        die("Connection Fail Because :- ".mysqli_connect_error());
    }
?>