<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 24-07-2016
 * Time: 19:17
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
        WELCOME TO HOME PAGE - <?= $username?>
    </div>
</div>