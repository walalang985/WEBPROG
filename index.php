<?php
    $host = "localhost";
    $username="webprog";
    $password="123456";
    $conn = mysqli_connect($host,$username,$password);
    if($conn){
        echo"<script>console.log('Connection to Database Success')</script>";
    }

?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dompurify/2.2.6/purify.min.js" integrity="sha512-rXAHWSMciPq2KsOxTvUeYNBb45apbcEXUVSIexVPOBnKfD/xo99uUe5M2OOsC49hGdUrkRLYsATkQQHMzUo/ew==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/fonts.css">
    <style>
        body {
            font-family: 'Merriweather Sans', sans-serif;
        }

        .nav-item {
            margin-left: 15px;
        }

    </style>
    <script>
        var cols = ["#col-1", "#col-2"]
        var vis = true;
        $(document).ready(function() {
            $(".btn-transparent").css("background-color", "transparent");
            $("#login-modal").click(function(event) {
                $("#loginModal").modal("show");
            })
            $("#login-dismiss").click(function(event) {
                $("#loginModal").modal("hide");
            })
            $("#register-dismiss").click(function(event){
                $("#registerModal").modal("hide");
            })
            $("#register-modal").click(function(event) {
                $("#registerModal").modal("show");
            })
            $("#x").click(function(event) {
                $('#registerModal').modal('show');
                $('#loginModal').modal('hide');
            })
        })

    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark sticky-top">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">

            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item" id="nav-register">
                <button type="button" class="btn btn-primary btn-block" id="register-modal">Register</button>
            </li>
            <li class="nav-item" id="nav-login">
                <button type="button" class="btn btn-primary btn-block" id="login-modal">
                    Login
                </button>
            </li>



        </ul>
    </nav>
    <div id="sss" class="container-fluid"></div>
    <div class="container">
    </div>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header">
                        <h5 class="modal-title mr-auto ml-auto">Login Form</h5>
                    </div>
                    <br>
                    <form action="login-auth.php" method="post" class="col-12">
                        <div class="form-group">
                            <label for="username"><span class="fas fa-user"></span> Username: </label>
                            <input type="text" class="form-control col rounded" placeholder="Enter Username" id="username" name="user" required>
                            <label for="password"><span class="fas fa-lock"></span> Password: </label>
                            <input type="password" class="form-control col" placeholder="Enter Password" id="password" name="pass" required>
                            <div class="modal-footer">
                                <div class="row float-right">
                                    <div class="col">
                                        <button type="button" id="login-dismiss" class="btn btn-danger "><span class="fas fa-window-close">Close</span> </button>
                                        <button type="submit" class="btn btn-primary " id="login submit-login"><span class="fa-sign-in-alt fas"> Login</span></button>
                                    </div>
                                </div>
                                <div class="row float-right">
                                    <div class="col">
                                        <p>No Account Yet? Register <a href="#" id="x"> HERE</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-header">
                        <h5 class="modal-title mr-auto ml-auto">Registration Form</h5>
                    </div>
                    <br>
                    <form action="register-account.php" method="post" class="col-12">
                        <label for="username"><span class="fas fa-user"></span> Username: </label>
                        <input type="text" class="form-control col rounded" placeholder="Enter Username" id="username" name="user" required>
                        <label for="password"><span class="fas fa-lock"></span> Password: </label>
                        <input type="password" class="form-control col" placeholder="Enter Password" id="password" name="pass" required>
                        <div class="row float-right">
                            <button type="button" id="register-dismiss" class="btn btn-danger "><span class="fas fa-window-close">Close</span> </button>
                                        <button type="submit" class="btn btn-primary " id="login submit-login"><span class="fa-sign-in-alt fas"> Register</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
