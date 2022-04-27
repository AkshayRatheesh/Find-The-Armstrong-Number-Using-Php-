<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>armstrong</title>
    <style>

    </style>
</head>
<body>
  <div class="container">

  <form method="post">  
 Enter the Number:  
   <input type="number" name="number" required> 
   <br>
   <input type="submit" value="Submit">  <br> 
  </form>  


  </div>
</body>
</html>

<?php  
 if($_POST)  
 {   
  //get the number entered  
  $number = $_POST['number'];  
  //store entered number in a variable  
  $a = $number;  
  $sum  = 0;  
  //run loop till the quotient is 0  
  while( $a != 0 )  
  {  
   $rem   = $a % 10; //find reminder  
   $sum   = $sum + ( $rem * $rem * $rem ); //cube the reminder and add it to the sum variable till the loop ends  
   $a   = $a / 10; //find quotient. if 0 then loop again  
  }  
  //if the entered number and $sum value matches then it is an armstrong number  
  if( $number == $sum )  
  {  
   echo "$number an Armstrong Number";  
  }else  
  {  
   echo "$number is not an Armstrong Number";  
  }  
 }  
?> 