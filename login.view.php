<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comments</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Project
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Login</div>

                            <div class="card-body">
                                <form method="POST" action="/login/validation">

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input  type="email" class="form-control is-invalid " name="email"  autocomplete="email" value="<?php if (isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" autofocus >
                                            <h5 style="color:red">
                                              <?php
                                              if (isset($_SESSION['flash_verify_email'])) {
                                                  echo $_SESSION['flash_verify_email'];
                                                  unset($_SESSION['flash_verify_email']);
                                              }
                                              if (isset($_SESSION['flash_login_email_form'])) {
                                                  echo $_SESSION['flash_login_email_form'];
                                                  unset($_SESSION['flash_login_email_form']);
                                              }
                                              if (isset($_SESSION['flash_verify_email_empty'])) {
                                                  echo $_SESSION['flash_verify_email_empty'];
                                                  unset($_SESSION['flash_verify_email_empty']);
                                              }
                                              ?>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                        <div class="col-md-6">
                                            <input type="password" class="form-control" name="password"  autocomplete="current-password" value="<?php if (isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                                            <h5 style="color:red">
                                              <?php
                                              if (isset($_SESSION['flash_verify_password'])) {
                                                  echo $_SESSION['flash_verify_password'];
                                                  unset($_SESSION['flash_verify_password']);
                                              }
                                              if (isset($_SESSION['flash_verify_password_empty'])) {
                                                  echo $_SESSION['flash_verify_password_empty'];
                                                  unset($_SESSION['flash_verify_password_empty']);
                                              }
                                              ?>
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" value="1">

                                                <label class="form-check-label" for="remember">
                                                    Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                               Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
