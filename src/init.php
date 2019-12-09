<?php

$command = './src/View.php';
$newPath = './app/Console/Command/';
$path = 'app/Console/';
if(!is_dir("./app/Console/Command"))
{
    $createCommandDirectory = mkdir($path.'Command');
    if(!$createCommandDirectory){
        return 'Erro ao criar diretório Command';
    }
}
if(!copy($command , $newPath.'CreateView.php')){
    echo "Erro ao criar arquivo";
}
