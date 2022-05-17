<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Register</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="theme-color" content="#7952b3">
    <style>
        .bd-placeholder-img {
            font-size: 1rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 2rem;
            }
        }

        .form-floating:focus-within {
            z-index: 2;
        }

        .form-signup {
            width: 100%;
            max-width: 500px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>

<body class="text-center">
    <div class="container mt-4 form-signup">
        <div class="card bg-light">
            <div class="card-body">
                <h1>Registration Form</h1>
                <form action="<?= site_url('/Signup'); ?>" method="post" name="add">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                <label for="firstname">First Name</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mt-3">
                                <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                <label for="lastname">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" class="w-100 btn btn-lg btn-primary mt-3" value="Register">
                        </div>
                        <div class="col-6">
                            <a href="<?php echo site_url('/index') ?>" class="w-100 btn btn-lg btn-warning mt-3">Forward</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</body>

</html>