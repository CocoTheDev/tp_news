<?php 

require 'autoload.php';

$dao = new DBFactory;
//$db->getMysqlConnectionWithPDO();
$db = $dao->getMysqlConnectionWithMySQLi();

print_r($db);
//$manager = new NewsManagerPDO($db);
$manager = new NewsManagerMySQLi($db);
print_r($manager->get(1));