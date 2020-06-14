<?php
require_once("sqlConnection.php");
?>

<?php
$returnTerm;
$TC = "70";
$semesterName ="No Active Term";
$semCode;
    // Open the file for reading
if (($h = fopen("termsDates2.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {   
    // Read the data from a single line
    $startDate = $data[0];
   // echo $startDate ."<br/>";
    $endDate = $data[1];
    $termNum = $data[2];
    //echo "Term Number: ".$termNum ."<br/>";
    $returnTerm = formSemester($startDate,$endDate, $termNum);
    if(!empty($returnTerm)){

                   // echo "jhkjjflkfjglk" .$returnTerm;
                    $semCode = substr($returnTerm,4); 
                    $year = substr($returnTerm,0,4); 
                    if($semCode == "80") 
                    {
                      $semesterName = "Fall - ".$year;
                    } elseif($semCode == "20"){
                      $semesterName = "Spring - ".$year;
                    } elseif($semCode == "30"){
                      $semesterName = "Summer I - ".$year;
                    }    elseif($semCode == "40"){
                      $semesterName = "Summer II - ".$year;
                    } else{
                      $semesterName = "No Active Term";
                    }      
                    
                   $TC = (int)$returnTerm; 

                   mysqli_select_db($link, $dbname);
                        $query_rsiuser = "select term from terms where term =" .$TC;
                        $rsiuser = mysqli_query($link, $query_rsiuser) or die(mysqli_error());
                        $row_rsiuser = mysqli_fetch_assoc($rsiuser);
                        $totalRows_rsuser = mysqli_num_rows($rsiuser);

                        if($totalRows_rsuser == 0) {
     // row not found, do stuff...
                            echo "Data Inserted : " ;
                            mysqli_select_db($link, $dbname);
                            $query_rsiuser = "INSERT terms set term =" .$TC;
                            $rsiuser = mysqli_query($link, $query_rsiuser) or die(mysqli_error());


                              } else {
    // do other stuff...
                                echo "Data Already Present : " ;
                                  $prevCode = abs($row_rsiuser['term']);
                                  }
            
                        

                     /*   if($prevCode =""){
            
                            echo "Data Inserted : " .$prevCode;
                            mysqli_select_db($link, $dbname);
                            $query_rsiuser = "INSERT terms set term =" .$TC;
                            $rsiuser = mysqli_query($link, $query_rsiuser) or die(mysqli_error());
                        
            
                        }else{
                            echo " ";
                        }*/
                   
            
    }
    echo "<br/>";
  }

  // Close the file
  fclose($h);
}
  
    function formSemester($date1, $date2, $term){
       // $currentDate = date('Y-m-d');
        //$currentDate = date('Y-m-d', strtotime($currentDate));
        $testDate = '2021-01-01';
        $testDate = date('Y-m-d', strtotime('2021-04-20'));
        //echo "Current Date: " $currentDate ."<br/>";
        $date_arr = explode("-", $testDate);
       // echo $date_arr[0] ."<br/>";
        
       // $myVar = substr($testDate,4);
      //  echo $myVar;
       // return;
        $month = trim($date_arr[1]);
        $day = (int)$date_arr[2];
     // echo $month;


      $endSemYear;
      $startSemYear;
    // return;
        if($term == "20"){
          
         // echo $term;
           if($month == "01" || $month == "02" || $month == "03" || $month == "04"){
           //  echo $month;
           //  echo $date_arr[0];
             $startSemYear = (int)$date_arr[0] - 1;
             $endSemYear = $date_arr[0];
           //  echo "Semester start Year: " .$startSemYear;
           }else{
              $endSemYear = (int)$date_arr[0] + 1;
              $startSemYear = $date_arr[0];
            //  echo "Semester ends Year: ".$endSemYear;
           }
            
           // echo $endSemYear;
          
        }else{
          $endSemYear = $date_arr[0];
          $startSemYear = $date_arr[0];
        }

        
        //return;

        $semStartDate = $date1."/".$startSemYear;
        $semEndDate = $date2."/".$endSemYear;

      //  echo "Semester Start Date: " .$semStartDate ."<br/>";
        $startDate = date('Y-m-d', strtotime($semStartDate));
      //  echo "Start Date:" .$startDate ."<br/>";
        $endDate = date('Y-m-d', strtotime($semEndDate));
      //  echo "End Date:" .$endDate ."<br/>";  

        //return;
       
        if (($testDate >= $startDate) && ($testDate <= $endDate)){
        echo "Start Date:" .$startDate ."<br/>";
        echo "End Date:" .$endDate ."<br/>"; 
        echo "Current Date: " .$testDate ."<br/>";  
        echo "Current date is between two dates"."<br/>";
        echo "Term Code is: ". "$date_arr[0]".$term .  "<br/>";
        echo "___________________________________";
        
          $myTerm= $date_arr[0].$term;
          return $myTerm;
        }else{
        //echo "Current date is not between two dates"; 
       // $myTerm ="70";
        //return $myTerm; 
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Current Term : <?php echo $TC ?></h3>
</body>
</html>