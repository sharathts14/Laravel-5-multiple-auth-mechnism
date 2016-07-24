<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 23-07-2016
 * Time: 22:12
 */

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php
            echo 'Laravel Auth'?>
        </title>
        <!--- stylesheets  -->
        <link href="http://localhost/laravel_auth/resources/assets/laravel_auth/css/bootstrap.min.css" rel="stylesheet" />
        <link href="http://localhost/laravel_auth/resources/assets/laravel_auth/css/bootstrap-theme.min.css" rel="stylesheet" />

        <script src="http://localhost/laravel_auth/resources/assets/laravel_auth/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="http://localhost/laravel_auth/resources/assets/laravel_auth/js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container-fluid" style="background-color: #c0c0c0; padding-left: 35%">
            <div class="row">
                <div class="well col-lg-6 col-sm-4">
                    <form id="login_form" name="login" class="form-horizontal" method="POST" action="Validate/login_auth">

                        <div class="box-header well"  style="text-align: center">
                            <span>Please Enter Username and Password</span>
                        </div>

                        <div class="form-group center">
                            <div class="input-group  col-sm-offset-1 col-sm-10"><br>
                                <span class="input-group-addon"></span>
                                <!--div class="col-sm-10" -->
                                <input type="text" name="username" class="form-control" placeholder="Username" id="username" required="required"><br/>
                                <!--/div-->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group  col-sm-offset-1 col-sm-10"><br>
                                <span class="input-group-addon"></span>
                                <!--div class="col-sm-10" -->
                                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required="required"><br/>
                                <!--/div-->
                            </div>
                        </div>
                        <br/>
                        <div style="padding-left: 40%">
                            <input class="btn btn-md btn-primary" name="login" type="submit" value="Login">
                        </div>
                        <br/>
                        <div style="padding-left: 43%">
                            <span class="h3">OR</span>
                        </div>
                        <br/>
                        <div style="padding-left: 25%">
                            <a href="auth/google" class="btn btn-md btn-danger" style="width: 200px" name="login-google" type="submit" value="Sign-in With Google">Sign-in With Google</a>
                        </div>
                        <br/>
                        <div style="padding-left: 25%">
                            <a class="btn btn-md btn-primary" style="width: 200px" name="login-facebook" type="submit" value="Sign-in With Facebook">Sign-in With Facebook</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>