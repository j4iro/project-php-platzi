<?php

class BaseElement
{
    protected $title;
    private $description;
    public  $visible = true;
    public $months;

    public function __construct($title, $description)
    {
      $this->setTitle($title);
      $this->setDescription($description);
    }

    public function getTitle(){
      return $this->title;
    }
    
    public function getDescription(){
      return $this->description;
    }
    
    public function getVisible(){
      return $this->visible;
    }
    
    public function getMonths(){
      return $this->months;
    }
    
    public function setTitle($title){
      if ($title=='') {
        $this->title = 'N/A';
      }
      else{
        $this->title = $title;
      }
    }
    
    public function setDescription($description){
      $this->description = $description;
    }
    
    public function setVisible($visible){
      $this->visible = $visible;
    }
    
    public function setMonths($months){
      $this->months = $months;
    }

    function getDurationAsString()
    {
      $years = floor($this->months / 12);
      $extraMonths = $this->months % 12;

      if($extraMonths!=0)
      {
        return ($years==0) ? "$extraMonths months" : "$years years y  $extraMonths months";
      }
      else
      {
        return ($years!=0) ?  "$years years" : "";
      }
    }
}