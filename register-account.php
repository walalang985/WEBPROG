<?php
    if(isset($_REQUEST["user"]) and isset($_REQUEST["pass"])){
        $host = "localhost";
        $un = "webprog";
        $pw = "123456";
        $db = "users";
        $conn = mysqli_connect($host,$un,$pw,$db);

        if($conn){
            $username = $_REQUEST["user"];
            $password = $_REQUEST["pass"];
            $id = null;
            $sql = "INSERT INTO userinfo(user,pass) VALUES('$username','$password');";
            if(mysqli_query($conn,$sql)){
                echo "<script>console.log(1)</script>";

            }else{
                die(mysqli_error($conn));
            }

        }
        mysqli_close($conn);
        header("Location: index.php?registration=sucess");
        exit;
    }
?>
