<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    // create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    if (!$conn){
        die("connection gagal : ". mysqli_connect_error());
    }
    $sql = "SELECT kode, negara, champion FROM liga";
    $result = mysqli_query ($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "Liga ".$row["negara"];
            echo "mempunyai ".$row["champion"];
            echo "Wakil di Liga Champion <br>";
        }
    }else{
        echo "0 results";
    }
    mysqli_close($conn);
?>