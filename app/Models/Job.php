<?php
namespace App\Models;
require_once 'BaseElement.php';


class Job extends BaseElement 
{
    public function __construct($title, $description)
    {
        // parent::__construct($title, $description);
        $newTitle = "Titulo Modificado: " . $title;
        $this->title = $newTitle;
    }

    public function getDescription()
    {
      return $this->description;
    }

    function getDurationAsString()
    {
      $years = floor($this->months / 12);
      $extraMonths = $this->months % 12;

      if($extraMonths!=0)
      {
        return ($years==0) ? "Job Duration: $extraMonths months" : "Job Duration: $years years y  $extraMonths months";
      }
      else
      {
        return ($years!=0) ? "Job Duration: $years years" : "";
      }
    // parent::getDurationAsString();
    }
}
