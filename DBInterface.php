<?php
// Interface for query statement (SELECT, UPDATE, ...)
interface DBInterface 
{
  public function query($query);
}