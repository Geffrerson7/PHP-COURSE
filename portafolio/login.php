<?php
session_start();
if ($_POST) {
    if (($_POST["username"] == "gefferson") && ($_POST["password"] == "123456")) {
        $_SESSION['username'] = "gefferson";
        header("location:index.php");
    } else {
        echo "<script> alert('Incorrect username or password')</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.3.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4" style="margin-top: 180px;">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center">Login</div>
                    <div class="card-body text-primary">
                        <form action="login.php" method="post">
                            User: <input class="form-control" type="text" name="username" id="">
                            <br />
                            Password: <input class="form-control" type="password" name="password" id="">
                            <br />
                            <button class="btn btn-primary form-control" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>

    </div>

</body>

</html>