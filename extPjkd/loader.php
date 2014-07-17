<?php
global $controller;
$extLoader_versiyon = '0.0.1';
$pats = glob(__DIR__."/*");
foreach($pats as $pat){
    if(is_dir($pat) and file_exists($pat."/run.php")){
        require($pat."/run.php");
    }
}