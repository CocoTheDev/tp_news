<?php 
// Utilisation du cours sur l'injection de dépendance de OpenClassRoom (source:https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1668103-les-design-patterns)

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

