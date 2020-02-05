<?php 

abstract class NewsManager
{

  abstract protected function add(News $news);
  abstract public function count();
  abstract public function delete($id);
  abstract public function getList($start = -1, $limit = -1);
  abstract public function getUnique($id);
  abstract public function save(News $news);
  abstract public function update(News $news);

}
