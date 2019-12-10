<?php
$init = exec("php artisan make:command madgicView");
//troca o arquivo gerado pelo View.php
$path = './app/Console/Command/madgicView.php';
$file = './src/View.php';
copy($file,$path);
