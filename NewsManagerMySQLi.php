<?php 

class NewsManagerMySQLi extends NewsManager
{

  protected $db;

  public function __construct(MySQLi $db)
  {
    $this->db = $db;
  }



  public function get($id)
  {
    $req = $this->db->query('SELECT id, autor, title, contained FROM news WHERE id ='.(int)$id);

    return $req->fetch_assoc();
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