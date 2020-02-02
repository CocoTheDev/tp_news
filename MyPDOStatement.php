<?php 

class MyPDOStatement implements ResultInterface
{
  protected $statement;

  public function __construct(PDOStatement $statement)
  {
    $this->statement = $statement;
  }

  public function fetchAssoc($statement)
  {
    return $this->statement->fetch(PDO::FETCH_ASSOC);
  }
}