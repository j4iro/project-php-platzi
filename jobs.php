<?php

use App\Models\{Job,Project,};

// require_once 'app/Models/Job.php';
// require_once 'app/Models/Project.php';
// require_once 'app/Models/Printable.php';
// require 'lib1/Project.php';

$jobs = Job::all();

$project1 = new Project('Project 1','Description 1');

$projects =[
  $project1
];

function printElement( $job)
{
  // if($job->getVisible()== false)
  // {
  //   return ; 
  // }

  echo '<li class="work-position">';
  echo '<h5>'. $job->title .'</h5>';
  echo '<p>'. $job->description .'</p>';
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