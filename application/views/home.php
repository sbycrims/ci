<?php defined('BASEPATH') OR exit('no access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Page</title>
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?= base_url('public/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('public/font-awesome/css/font-awesome-animation.min.css') ?>">
        <!-- jQuery -->
        <script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>

        <!-- style sheets -->
        <link rel="stylesheet" href="<?= base_url('public/css/form-elements.css') ?>"/>
        <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>"/>

        <!-- scripts -->
        <script src="<?= base_url('public/js/main.js') ?>"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="bg-primary text-center">error</div>
                    <div class="form-bottom">
                        <form id="loginForm">
                            <div class="form-group">
                                <label for="" class="sr-only">E-mail</label>
                                <input type="text" placeholder="Enter Email" class="form-control checkField">
                                <span></span>
                            </div>

                            <div class="from-group">
                                <label for="" class="sr-only"></label>
                                <input type="password" placeholder="Password" class="form-control checkField" >
                                <span></span>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Submit</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>

        <script src="<?= base_url('public/js/main.js')?>"></script>
        <script src="<?= base_url('public/js/access.js')?>"></script>
        
    </body>
</html>