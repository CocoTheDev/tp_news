<?php

class NewsManagerPDO extends NewsManager
{

  protected $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }



  public function get($id)
  {
    $req = $this->db->query('SELECT id, autor, title, contained FROM news WHERE id ='.(int)$id);
    
    return $req->fetchAll();
  }

  public function add()
  {

  }
  public function delete($id)
  {

  }
  public function update($id)
  {

  }

}