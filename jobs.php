<?php

$jobs = [
    [
      'title' => 'PHP Developer',
      'description' => 'Esta es la descripcion para la seccion de PHP   Developer',
      'visible' => true,
      'months' => 16
    ],
    [
      'title' => 'Python Dev',
      'description' => 'Esta es la descripcion para la seccion de Pyton Dev',
      'visible' => true,
      'months' => 14
    ],
    [
      'title' => 'Devops',
      'description' => 'Esta es la descripcion para la seccion de Devops',
      'visible' => true,
      'months' => 5
    ],
    [
      'title' => 'Node Dev',
      'description' => 'Esta es la descripcion para la seccion de   Node Dev',
      'visible' => true,
      'months' => 24
    ],
    [
      'title' => 'Frontend Dev',
      'description' => 'Esta es la descripcion para la seccion de Fontend Dev',
      'visible' => true,
      'months' => 3
    ]
  ];

  function getDuration($months)
  {
    $years = floor($months / 12);
    $extraMonths = $months % 12;

    if($extraMonths!=0)
    {
      return ($years==0) ? "$extraMonths months" : "$years years y  $extraMonths months";
    }
    else
    {
      return ($years!=0) ?  "$years years" : "";
    }
    
  }

  function printJob($job)
  {
    if($job['visible']== false)
    {
      return ; 
    }

    echo '<li class="work-position">';
    echo '<h5>'. $job['title'] .'</h5>';
    echo '<p>'. $job['description'] .'</p>';
    // echo '<p>'. $totalMonths .'</p>';
    echo '<p>'. getDuration($job['months']) .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }