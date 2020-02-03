<?php 

abstract class NewsManager
{

  abstract public function add();
  abstract public function delete($id);
  abstract public function update($id);
  abstract public function get($id);

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

