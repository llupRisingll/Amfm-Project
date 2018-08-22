<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amfm | Signup</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <style type="text/css">
        .cd {
            width: 680px;
            top: 44px;
            margin: auto auto 50px;
        }

        .signup {
            float: left;
            width: 250px;
            padding: 15px 0 0 5px;
        }

        .icon {
            float: right;
            width: 250px;
            padding: 0 0 0 147px;
            font-size: 60px;
        }

        .fn {
            float: left;
            width: 328px;
            padding: 0;
        }

        .ln {
            float: right;
            width: 319px;
            padding: 0;
        }

        .btn {
            background-color: darkseagreen;
            border: 0;
            color: black;
        }
        .btn:hover{
            background-color: #55af55;
            color: black;
        }
    </style>
</head>
<body style="background-color: whitesmoke">
<div class="container">
    <div class="card cd">
        <div class="card-header" style="background-color: darkseagreen; border: 0;">
            <div class="col signup">
                <h3>Signup</h3>
                <small>Already have an account? <a href="loginPage.php">Click here</a></small>
            </div>
            <div class="col icon">
                <i class="fas fa-pen "></i>
            </div>
        </div>
        <div class="card-body">
            <form style="padding: 15px;">
                <div class="form-row">
                    <div class="col fn">
                        <i class="fas fa-user"></i>
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter First name" name="firstName">
                    </div>
                    <div class="col ln">
                        <i class="fas fa-user"></i>
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter Last name" name="lastName">
                    </div>
                </div>

                <div class="form-group">
                    <i class="fas fa-map-marked"></i>
                    <label for="address">Address</label>
                    <input type="text" class="form-control" placeholder="Enter Address" name="address">
                </div>

                <div class="form-group">
                    <i class="fas fa-users"></i>
                    <label for="sponsor">Sponsor</label>
                    <input type="text" class="form-control" placeholder="Enter Sponsor" name="sponsor">
                </div>

                <div class="form-group">
                    <i class="fas fa-edit"></i>
                    <label for="voucher">Voucher</label>
                    <input type="text" class="form-control" placeholder="Enter Voucher" name="voucher">
                </div>

                <div class="form-group">
                    <i class="fas fa-edit"></i>
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Enter Username" name="username">
                </div>

                <div class="form-group">
                    <i class="fas fa-eye"></i>
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password" name="password">
                </div>

                <div class="form-group">
                    <i class="fas fa-eye"></i>
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Enter Confirm password" name="confirm_password">
                </div>

                <button class="btn btn-primary btn-default btn-block"><i class="fas fa-pen "></i> signup</button>
            </form>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>