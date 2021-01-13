<?php

    if(isset($_REQUEST["user"]) and isset($_REQUEST["pass"])){
        $host = "localhost";
        $username = "webprog";
        $password = "123456";
        $dbname = "users";

        $conn = mysqli_connect($host,$username,$password,$dbname);
        if($conn){
            $un = $_REQUEST["user"];
            $pw = $_REQUEST["pass"];
            $sql = "SELECT user,pass FROM userinfo WHERE user = '$un';";
            $res = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($res);
            if($row['user'] === $un and $row['pass'] === $pw){
                header("Location: index.php?login=Success");
                exit;
            }
            else{
                header("Location: index.php?login=Failed");
                exit;
            }
        }
    }

?>
