<?php

class MyMySQLiResult implements ResultInterface
{
  protected $statement;

  public function __construct(MySQLi_Result $statement)
  {
    $this->statement = $statement;
  }

  public function fetchAssoc()
  {
    return $this->statement->fetch_assoc();
  }
}