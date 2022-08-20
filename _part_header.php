<?php

# Call libraries function
# panggil disini karena akan di pakai berulang2
include 'lib/function/main_function.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Special Pancake</title>

    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/bootsrap-theme/cerulean/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span class="text-primary">API</span> Pancake</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-right">
                    <p class="navbar-text"><span id="clock"></span> </p>
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron" style="background-color: #044d8d; color: white;">
        <div class="container" style="padding-bottom: 10px;">
            <h1>API Pancake</h1>
            <i style="font-size: 16px;">API Special Pancake for Development testing</i>
        </div>
    </div>