<?php
$fileName = str_replace("catalog/","",DIR_APPLICATION)."extPjkd/catalogMode/catalogMode.php";
if(file_exists($fileName)){
    include($fileName);
}