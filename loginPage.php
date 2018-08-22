<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amfm | Login</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style>
        .cd {
            width: 500px;
            top: 44px;
            margin: auto auto 50px;
        }

        .signup {
            float: left;
            width: 200px;
            padding: 15px 0 0 5px;
        }

        .icon {
            float: right;
            width: 250px;
            padding: 0 0 0 147px;
            font-size: 60px;
        }
        .btn {
            background-color: #4ba2ecc9;
            border: 0;
            color: black;
            margin-bottom: 12px;
        }
        .btn:hover{
            background-color: #3781bfc9;
            color: black;
        }
    </style>
</head>
<body style="background-color: whitesmoke">
<div class="container">
    <div class="card cd">
        <div class="card-header" style="border: 0; background-color: #4ba2ecc9;">
            <div class="col signup">
                <h3>Login</h3>
                <small>Don't have an account? <a href="signupPage.php">Click here</a></small>
            </div>

            <div class="col icon">
                <i class="fas fa-unlock"></i>
            </div>
        </div>
        <div class="card-body">
            <form style="padding: 15px;">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                </div>

                <div class="form-group">
                    <i class="fas fa-eye"></i>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password">
                </div>

                <button class="btn btn-primary btn-default btn-block btn-info"><i class="fas fa-unlock"></i> login</button>
                <small style="float: right; margin-bottom: 10px;">Forgot <a href="#">Password ?</a></small>
            </form>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>