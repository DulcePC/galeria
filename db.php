<?php

$db = new Mysqli;
$db->connect('localhost','root','','galeria');

if(!$db){
    echo "success";
}

?>