<?php 
// When using MySQLi data base
class MyMySQLi extends MySQLi implements DBInterface
{
  public function query($query)
  {
    return new MyMySQLiResult(parent::query($query));
  }
}