<?php

/**
 * Created by PhpStorm.
 * User: nav
 * Date: 01-08-15
 * Time: 11:36
 */

require_once 'vendor/autoload.php';

$directory = 'cms-installations/*.zip';
$datetime = new DateTime('now');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zippy - by Nav Appaiya</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- Font Awsome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Custom Stylesheets -->
    <link rel="stylesheet" href="src/Nav/Zippy/assets/css/styles.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<hr class="">
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1 class="">Zippy</h1>
            <p>Simple script for browsing and <br>unzipping files on your host or server</p>
            <p><strong>Currently reading from:  <?php echo $directory; ?></strong></p>
        </div>
        <div class="col-sm-2">
            <a href="#" class="pull-right">
                <img title="zippy image" class="img-circle img-responsive" src="src/Nav/Zippy/assets/img/zippy1.png" style="width: 90%">
            </a>
        </div>
    </div>

    <br>
    <hr style="border:4px solid #359B9B;">

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                    <thead>
                    <tr>
                        <th style="width:5%">
                            <input class="no-margin" type="checkbox">
                        </th>
                        <th style="width:40%">Filename</th>
                        <th style="width:15%" class="hidden-phone">Size</th>
                        <th style="width:10%" class="hidden-phone">Permissions</th>
                        <th style="width:15%" class="hidden-phone">Last modified</th>
                        <th style="width:10%" class="hidden-phone">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach(glob($directory) as $file): ?>
                        <tr>
                            <td>
                                <input class="no-margin" type="checkbox">
                            </td>
                            <td>
                                <span class="filename"><?= $file ?></span>
                            </td>
                            <td>
                                <span class="size"><?= filesize($file); ?> KB</span>
                            </td>
                            <td>
                                <span class="permissions"> <?= substr(sprintf('%o', fileperms($file)), -4); ?></span>
                            </td>
                            <td>
                                <span class="date"><?= date("Y-m-d H:i:s", filectime($file)) ?></span>
                            </td>
                            <td>
                                <a class="btn btn-zippy btn-sm btn-block" href="#">
                                    Unzip
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Custom javascripts -->
<script src="src/Nav/Zippy/assets/js/script.js"></script>
</body>
</html>
