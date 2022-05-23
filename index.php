<?php 


function getDayOfTheWeek($year, $month, $day){
  
    $a = $year%100;
    $twelves = $a / 12;
    $remainder = $a % 12;
    $fours = $remainder / 4;
    

    if ($month )
    





}
  getDayOfTheWeek(2022, 01, 01);




function makeCalendar(){
    
    $date = array("Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday");

        
    for ($x = 1; $x <= 31; $x++){
      $string .= "1-" . $x . "-2022 is a " . $day . "<br>";
  }

  foreach ($date as $dates) {}
  
    
    echo $string;

    for ($x = 1; $x <= 28; $x++){
      $string2 .= "2-" . $x . "-2022 is a " . "<br>";
    }
    echo $string2;
    
    for ($x = 1; $x <= 31; $x++){
      $string3 .= "3-" . $x . "-2022 is a " . "<br>";
    }
    echo $string3;
    
    for ($x = 1; $x <= 30; $x++){
      $string4 .= "4-" . $x . "-2022 is a " . "<br>";
    }
    echo $string4;
    
    for ($x = 1; $x <= 31; $x++){
      $string5 .= "5-" . $x . "-2022 is a " . "<br>";
    }
    echo $string5;
    
    for ($x = 1; $x <= 30; $x++){
      $string6 .= "6-" . $x . "-2022 is a " . "<br>";
    }
    echo $string6;
    
    for ($x = 1; $x <= 31; $x++){
      $string7 .= "7-" . $x . "-2022 is a " . "<br>";
    }
    echo $string7;
    
    for ($x = 1; $x <= 31; $x++){
      $string8 .= "8-" . $x . "-2022 is a " . "<br>";
    }
    echo $string8;
    
    for ($x = 1; $x <= 30; $x++){
      $string9 .= "9-" . $x . "-2022 is a " . "<br>";
    }
    echo $string9;
    
    for ($x = 1; $x <= 31; $x++){
      $string10 .= "10-" . $x . "-2022 is a " . "<br>";
    }
    echo $string10;
    
    for ($x = 1; $x <= 30; $x++){
      $string11 .= "11-" . $x . "-2022 is a " . "<br>";
    }
    echo $string11;
    
    for ($x = 1; $x <= 31; $x++){
      $string12 .= "12-" . $x . "-2022 is a " . "<br>";
    }
    echo $string12;
  
  }

   makeCalendar();
    



?>
