<?php

class NewsManagerPDO extends NewsManager
{

  protected $db;

  public function __construct(PDO $db)
  {
    $this->db = $db;
    $this->createTableNews($db);
  }

  public function createTableNews($db)
  {

    try 
    {
      $this->db->exec("CREATE TABLE IF NOT EXISTS `news` (
        `id` int(11) NOT NULL,
        `autor` varchar(255) NOT NULL,
        `title` varchar(255) NOT NULL,
        `contained` text NOT NULL,
        `dateCreation` int(11) NOT NULL,
        `dateModification` int(11) DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    } 
    catch (PDOException $e) 
    {
      die("DB ERROR: ". $e->getMessage());
    }

  }


  public function add(News $news)
  {

  }

  public function count()
  {

  }

  public function delete($id)
  {

  }
  public function getList($start = -1, $limit = -1)
  {

  }

  public function getUnique($id)
  {
    $query = 'SELECT id, autor, title, contained FROM news WHERE id = :id';
    $req = $this->db->prepare($query);
    $req->bindValue(':id', $id);
    $req->execute();
    return $req->fetchAll();
  }

  public function save(News $news)
  {

  }

  public function update(News $news)
  {

  }

}