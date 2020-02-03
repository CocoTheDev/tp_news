<?php 

require 'autoload.php';

// DB Connection Choice
$dbChoice = 'MySQLi'; // PDO Or MySQLi

if ($dbChoice == 'PDO')
{
  $dao = new DBFactory;
  $db = $dao->getMysqlConnectionWithPDO();
  $manager = new NewsManagerPDO($db);
}
elseif ($dbChoice == 'MySQLi')
{
  $dao = new DBFactory;
  $db = $dao->getMysqlConnectionWithMySQLi();
  $manager = new NewsManagerMySQLi($db);
}
else
{
  return "<br>Please choose any db connection.<br>";
}

print_r($manager->get(1));