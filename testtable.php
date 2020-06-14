<?php
require_once('terms.php');

//echo $semesterName ."<br/>";


$myVar= true;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Table</title>
  </head>

  <body>
    <table border="0" cellspacing="0" cellpadding="5">
      <tr>
        <td 
          colspan="2"
          style="border-bottom: 1px solid black; font-weight: bold;"
        >
          Available Credit
        </td>
      </tr>
      <tr>
        <td style="width:15%" align="right"><strong>Status:</strong></td>
        <td style="width:85%"><?php if($myVar == false){
          echo "Not meeting criteria";
    


        } else{
          echo $myVar;
        }  ?></td>
      </tr>

      <?php 
        if($myVar == false){?>
        <tr>
        <td style="width:15%" align="right" valign="top">
          <strong>How to fix:</strong>
        </td>
        <td style="width:85%">Some Data.</td>
      </tr>
       <?php }
      
      ?>

      
    </table>
          <h3>Current Term : <?php echo $semesterName ?></h3>
          <td><input type="submit" value="ClickMe" disabled=""></td>
    <table>

    </table>
  </body>
</html>
