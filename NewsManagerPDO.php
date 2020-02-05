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
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `autor` VARCHAR(30) NOT NULL,
        `title` VARCHAR(30) NOT NULL,
        `contained` TEXT NOT NULL,
        `dateCreation` INT NOT NULL,
        `dateModification` INT DEFAULT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
    } 
    catch (PDOException $e) 
    {
      die("DB ERROR: ". $e->getMessage());
    }

  }


  public function add(News $news)
  {
  $req = $this->db->prepare('INSERT INTO News(autor, title, contained, dateCreation, dateModification) VALUES (:autor, :title, :contained, :dateCreation, :dateModification)');
  $req->bindValue(':autor', $news->autor());
  $req->bindValue(':title', $news->title());
  $req->bindValue(':contained', $news->contained());
  $req->bindValue(':dateCreation', $news->dateCreation());
  $req->bindValue(':dateModification', $news->dateModification());
  $req->execute();
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