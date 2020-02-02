<?php 

require 'autoload.php';

// Connection to data base
// Password: MAC = "root" ; Linux = ""
$dao = new DBFactory (['host'=>'localhost', 'dbname'=>'tp_news', 'root'=>'root', 'root_password'=>'root']);
$dao->getMysqlConnexionWithPDO();
$manager = new NewsManager($db);


print_r($manager->get(1));
