<?php 

echo "test";

// Create Connection
$host="localhost"; 
$root="root"; 
$root_password="root"; // Password: MAC = "root" ; Linux = ""
$dbname = "tp_news";




$dao = new PDO("mysql:host=$host;dbname=$dbname", $root, $root_password);
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


// Autoload classes
function chargerClasse($classname)
{
  require $classname.'.php';
}
spl_autoload_register('chargerClasse');


$manager = new NewsManager($dao);
print_r($manager->get(1));
