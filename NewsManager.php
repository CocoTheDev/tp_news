<?php 
// Utilisation du cours sur l'injection de dépendance de OpenClassRoom (source:https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1668103-les-design-patterns)

// Interface for PDO query statement (SELECT, UPDATE, ...)
interface DBInterface 
{
  public function query($query);
}

// Interface for result of query statement (result from a ::FETCH_ASSOC)
interface ResultInterface
{
  public function fetchAssoc();
}


// class for MyPDO users extends from PDO class, implement DB interface for query request
class MyPDO extends PDO implements DBInterface
{
  public function query($query)
  {
    return new MyPDOStatement(parent::query($query));
  }
}

class MyMySQLi extends MySQLi implements DBInterface
{
  public function query($query)
  {
    return new MyMySQLiResult(parent::query($query));
  }
}


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


class NewsManager
{
  protected $dao;

  public function __construct(DBInterface $dao)
  {
    $this->dao = $dao;
  }

  public function get($id)
  {
    $req = $this->dao->query('SELECT id, autor, title, contained FROM news WHERE id ='.(int)$id);

    if (!$req instanceof ResultInterface)
    {
      throw new Exception ('The result of the request must be an object from Result Interface');
    }

    return $req->fetchAssoc();
  }
}


/* CREATE TABLE `news` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `dateModif` datetime NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8; */

