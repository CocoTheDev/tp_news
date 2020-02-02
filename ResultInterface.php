<?php 

// Interface for results from a query statement
interface ResultInterface
{
  public function fetchAssoc($statement = null);
}