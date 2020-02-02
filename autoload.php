<?php
function autoload($classname)
{
  if (file_exists($file = __DIR__ . '/' . $classname . '.php'))
  {
    echo "<br> autoload loaded for: " . $classname . "<br>";
    require $file;
  }
}

spl_autoload_register('autoload');