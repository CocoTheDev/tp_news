<?php 

// When using PDO data base
class MyPDO extends PDO implements DBInterface
{
  public function query($query)
  {
    return new MyPDOStatement(parent::query($query));
  }
}