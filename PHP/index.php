<!DOCTYPE html>
<html>
<body>

<?php
    $host='localhost';
    $user='root';
    $password='root'; 
    $database='test';
    $port=8889;
 
    $con = new mysqli($host, $user, $password, $database, $port) or die(mysqli_connect_error());
    $con->query("SET NAMES utf8");

    // $sql = "SELECT * FROM Persons";
    $result = $con->query("SELECT * FROM users");


    while($row = $result->fetch_array()){
        echo $row[1];
    }

    // mysql_close($con);
?>

</body>
</html>