<?php
require_once 'vendor/autoload.php';
use App\Models\{Job,Project, Printable};

// require_once 'app/Models/Job.php';
// require_once 'app/Models/Project.php';
// require_once 'app/Models/Printable.php';
// require 'lib1/Project.php';

$job1 = new Job("PHP Developer","This is an hard job but very funnie");
$job1->setMonths(16);

$job2 = new Job("Python Developer","This is an hard job but very funnie");
$job2->setMonths(24);

$job3 = new Job("","This is an hard job but very funnie");
$job3->setMonths(21);

$project1 = new Project('Project 1','Description 1');
$project1->setMonths(50);


$jobs = [
  $job1,
  $job2,
  $job3
  ];

$projects =[
  $project1
];

function printElement(Printable $job)
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