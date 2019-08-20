<?php
namespace App\Models;
// require_once 'BaseElement.php';
use Illuminate\Database\Eloquent\Model;

class Job extends Model 
{
    protected $table = "jobs";
    
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
