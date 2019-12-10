<?php

$init = exec("php artisan make:command createView");
//troca o arquivo gerado pelo View.php
$path = './app/Console/Command/createView.php';
$file = './src/View.php';
//copy($file,$path);
