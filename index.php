<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Doc</title>
  </head>
  <body>
    
  </body>
</html>
<?php

   $currentDate = date('Y-m-d');
    $currentDate = date('Y-m-d', strtotime($currentDate));
    echo $currentDate ."<br/>";
    $date_arr = explode("-", $currentDate);
    echo $date_arr[0] ."<br/>";
  $currentYear = "05/01/".$date_arr[0];

  echo $currentYear ."<br/>";

    $startDate = date('Y-m-d', strtotime($currentYear));
    echo "Start Date:" .$startDate ."<br/>";
    $endDate = date('Y-m-d', strtotime("08/10/2020"));
    echo "End Date:" .$endDate ."<br/>";   
    if (($currentDate >= $startDate) && ($currentDate <= $endDate)){
        echo "Current date is between two dates";
    }else{
        echo "Current date is not between two dates";  
    }


    ?>