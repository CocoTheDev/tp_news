<?php 
class News 
{

  protected $id,
            $autor,
            $title,
            $contained,
            $dateCreation,
            $dateModification;

  public function __construct(array $data)
  {
    $this->hydrate($data);
  }

  public function hydrate(array $data)
  {
    if (!empty($donnees)) 
    {
      foreach ($donnees as $key => $value) 
      {
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
      }
    }
    else 
    {
      return "no data to hydrate";
    }
  }

  //Getters
  public function id()
  {
    return $this->id;
  }
  public function autor()
  {
    return $this->autor;
  }
  public function title()
  {
    return $this->title;
  }
  public function contained()
  {
    return $this->contained;
  }
  public function dateCreation()
  {
    return $this->dateCreation;
  }
  public function dateModification()
  {
    return $this->dateModifictation;
  }

  //Setters
  public function setId($id)
  {
    $id = (int) $id;
    $this->id = $id;
  }
  public function setAutor($autor)
  {
    $autor = (string) $autor;
    $this->autor = $autor;
  }
  public function setTitle($title)
  {
    $title = (string) $title;
    $this->title = $title;
  }
  public function setContained($contained)
  {
    $contained = (string) $contained;
    $this->contained = $contained;
  }
  public function setDateCreation($dateCreation)
  {
    $dateCreation = (int) $dateCreation;
    $this->dateCreation = $dateCreation;
  }
  public function setDateModification($dateModifitcation)
  {
    $dateModification = (int) $dateModification;
    $this->dateModification = $dateModifictation;
  }









}

