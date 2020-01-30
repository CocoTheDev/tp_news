<?php 

// Autoload classes
/* function chargerClasse($classname)
{
  require $classname.'.php';
}
spl_autoload_register('chargerClasse'); */

require 'NewsManager.php';

// Connection infos
$host="localhost"; 
$root="root"; 
$root_password="root"; // Password: MAC = "root" ; Linux = ""
$dbname = "tp_news";

// Connection to data base
$dao = new MyPDO("mysql:host=$host;dbname=$dbname", $root, $root_password);
// $dao = new MyMySQLi($host, $root, $root_password);

// Check connection
if(! $dao )
{
   echo 'Connected failure<br>';
}
else
{
  echo 'Connected successfully<br>';
}





$manager = new NewsManager($dao);
print_r($manager->get(1));
