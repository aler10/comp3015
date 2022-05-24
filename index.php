<?php 

function getDayOfTheWeek($year, $month, $day){
  
    $a = $year%100;
    $twelves = $a / 12;
    $remainder = $a % 12;
    $fours = $remainder / 4;

    $total = $twelves + $remainder + $fours + $day;
    
    if ($month == 1 || 10 ){
       $total = $total + 1;
    } else if ($month == 2 || 3 || 11){
      $total = $total + 4;
    } else if ($month == 4 || 7){
      $total = $total + 0;
    } else if ($month == 5){
      $total = $total + 2;
    } else if ($month == 6) {
      $total = $total + 5;
    } else if ($month == 8){
      $total = $total + 3;
    } else if ($month == 9 || 12){
      $total = $total + 6;
    }

    function isLeapYear($year){
      if($year % 4 == 0){
        return true;
      } else {
        return false;
      }
    }

    if ($month == 1 && $year % 4 == 0){
      $total = $total - 1;
    } else if ($month == 2 && $year % 4 == 0){
      $total = $total - 1;
    }

    $total2 = $total % 7;
  
    if ($total2 == 0){
      echo "Saturday". "<br>";
    } else if ($total2 == 1){
      echo "Sunday". "<br>";
    } else if ($total2 == 2){
      echo "Monday". "<br>";
    } else if ($total2 == 3){
      echo "Tuesday". "<br>";
    } else if ($total2 == 4){
      echo "Wednesday". "<br>";
    } else if ($total2 == 5){
      echo "Thursday". "<br>";
    } else if ($total2 == 6){
      echo "Friday" . "<br>";
    }

}
  getDayOfTheWeek(1989, 9, 16);


function makeCalendar(){
    
    $date = array("Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

        
    for ($x = 1; $x <= 31; $x++){
      foreach ($date as $dates) {
      $string .= "1-" . $x . "-2022 is a " . $dates . "<br>";
  }
}
    echo $string;

    for ($x = 1; $x <= 28; $x++){
      foreach ($date as $dates) {
      $string2 .= "2-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string2;
    
    for ($x = 1; $x <= 31; $x++){
      foreach ($date as $dates) {
      $string3 .= "3-" . $x . "-2022 is a " . $dates .  "<br>";
    }
  }
    echo $string3;
    
    for ($x = 1; $x <= 30; $x++){
      foreach ($date as $dates) {
      $string4 .= "4-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string4;
    
    for ($x = 1; $x <= 31; $x++){
      foreach ($date as $dates) {
      $string5 .= "5-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string5;
    
    for ($x = 1; $x <= 30; $x++){
      foreach ($date as $dates) {
      $string6 .= "6-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string6;
    
    for ($x = 1; $x <= 31; $x++){
      foreach ($date as $dates) {
      $string7 .= "7-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string7;
    
    for ($x = 1; $x <= 31; $x++){
      foreach ($date as $dates) {
      $string8 .= "8-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string8;
    
    for ($x = 1; $x <= 30; $x++){
      foreach ($date as $dates) {
      $string9 .= "9-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string9;
    
    for ($x = 1; $x <= 31; $x++){
      foreach ($date as $dates) {
      $string10 .= "10-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string10;
    
    for ($x = 1; $x <= 30; $x++){
      foreach ($date as $dates) {
      $string11 .= "11-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string11;
    
    for ($x = 1; $x <= 31; $x++){
      foreach ($date as $dates) {
      $string12 .= "12-" . $x . "-2022 is a " . $dates . "<br>";
    }
  }
    echo $string12;
  
  }

   makeCalendar();

?>
