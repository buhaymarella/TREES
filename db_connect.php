<?php
    //Server Details
    $servername="localhost";
    $dbusername="root";
    $dbpassword="root";
    $dbname="trees-sample";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"<script>window.location.href=login.php</script>";
    }catch(PDOException $e){
        echo "Connection Failed: " . $e->getMessage();
    }
?>