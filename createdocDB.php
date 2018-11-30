<?php

   $pd=new PDO("mysql:host=localhost","root","");
   $q="create database doctor";
   $pd->exec($q);
    echo "created";
?>
