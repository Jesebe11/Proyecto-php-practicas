<?php
$jobs = [
    [
    'title'=>'PHP Developer',
    'description' => 'This is an awesome language',
    'visible' => true,
    'months'  => 5
    ],
  [
    'title'=>'Python Dev',
    'description' => 'This is espectacular an awesome language',
    'visible' => true,
    'months'  => 8
  ],
  [
  'title'=>'Devops',
  'description' => 'No words, just beautiful',
  'visible' => true,
  'months'  => 10
  ],
  [
  'title'=>'Node Dev',
  'description' => 'No words, just beautiful',
  'visible' => true,
  'months'  => 20
  
  ],
  [
  'title'=>'Frontend Dev',
  'description' => 'No words, just beautiful',
  'visible' => true,
  'months'  => 16
  ],
  
  ];
  
  function getDuration($months){
    $years = floor($months / 12);
    $extraMonths = $months % 12;
    
    if ($years > 0 && $extraMonths > 0) {
      return "$years years and $months months";
    } elseif ($years == 0 && $extraMonths > 0) {
      return "$extraMonths months";
    } elseif ($extraMonths == 0 && $years > 0) {
      return "$years years";
    }
  }
  
  
  function printJob($job){
    if ($job['visible'] == false) {
    return;
    }
    echo  '<li class="work-position">';
    echo '<h5>'.$job ['title'].'</h5>';
    echo '<p>' .$job ['description'].'</p>';
    echo '<p>'.getDuration($job['months']).'</p>';
  //  echo '<p>'.'Duration: ' .$totalMonths.'  '.'months'.'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
  }

