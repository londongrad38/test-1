<?php

declare(strict_types=1);

//phpinfo();

//echo "Hello World";

$link = mysqli_connect('mysql', 'root', 'root');

// $connection->query('CREATE DATABASE `lemp_docker`');
//$db_list = mysqli_query($connection, "SHOW DATABASES");
mysqli_select_db($link, lemp_docker);
?>