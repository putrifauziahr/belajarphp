<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "latihan";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if ($conn -> connect_error){
        die ("Connection gagal : " . $conn->connect_error);
    }

    $sql = "SELECT kode, negara, champion FROM liga";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            echo "Liga " .$row ["negara"];
            echo "Mempunyai " . $row ["champion"];
            echo "Wakil di Liga Champion <br> ";
        }
    }else{
        echo "0 results";
    }
    $conn -> close ();
?>