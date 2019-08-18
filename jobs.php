<?php

class Job
{
    private $title;
    private $description;
    public  $visible = true;
    private $months;

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

$job1 = new Job("PHP Developer","This is an hard job but very funnie");
// $job1->setVisible(true);
$job1->setMonths(16);

$job2 = new Job("Python Developer","This is an hard job but very funnie");
// $job2->setVisible(true);
$job2->setMonths(24);

$job3 = new Job("","This is an hard job but very funnie");
// $job3->setVisible(true);
$job3->setMonths(24);

$jobs = [
  $job1,
  $job2,
  $job3
    // [
    //   'title' => 'PHP Developer',
    //   'description' => 'Esta es la descripcion para la seccion de PHP   Developer',
    //   'visible' => true,
    //   'months' => 16
    // ],
    // [
    //   'title' => 'Python Dev',
    //   'description' => 'Esta es la descripcion para la seccion de Pyton Dev',
    //   'visible' => true,
    //   'months' => 14
    // ],
    // [
    //   'title' => 'Devops',
    //   'description' => 'Esta es la descripcion para la seccion de Devops',
    //   'visible' => true,
    //   'months' => 5
    // ],
    // [
    //   'title' => 'Node Dev',
    //   'description' => 'Esta es la descripcion para la seccion de   Node Dev',
    //   'visible' => true,
    //   'months' => 24
    // ],
    // [
    //   'title' => 'Frontend Dev',
    //   'description' => 'Esta es la descripcion para la seccion de Fontend Dev',
    //   'visible' => true,
    //   'months' => 3
    // ]
  ];

  

  function printJob($job)
  {
    if($job->getVisible()== false)
    {
      return ; 
    }

    echo '<li class="work-position">';
    echo '<h5>'. $job->getTitle() .'</h5>';
    echo '<p>'. $job->getDescription() .'</p>';
    // echo '<p>'. $totalMonths .'</p>';
    echo '<p>'. $job->getDurationAsString() .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }