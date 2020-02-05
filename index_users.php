<?php 

require 'autoload.php';

// DB Connection Choice
$dbChoice = 'PDO'; // PDO Or MySQLi

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


$news = new News(['autor'=>'moi', 'title'=>'Mes vacances aux soleil', 'contained'=>'petit recap', 'dateModification'=> NULL]);
echo '<br>Step 1, add news, print news<br>';
$manager->add($news);
echo '<br>Step 2, print news if it existe on DB:<br>';
print_r($manager->getUnique(3));
echo '<br>DONE<br>';