<?php
include("dodatabase.php");
 $q= "CREATE TABLE IF NOT EXISTS dooctor (
 Disease_name varchar(50) NOT NULL,
 Drug1 varchar(50) NOT NULL,
 Drug2 varchar(50) NOT NULL,
 Drug3 varchar(50) NOT NULL,
 age varchar(50) NOT NULL,
 PRIMARY KEY (Disease_name)
);";
$db->myExec($q);
?>
