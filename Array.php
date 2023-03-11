<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// u can also use array() function to make array
   // $itsAnArray = array(1,2,3,'Yo','<h1>its H1 tag </h1>');
   // print_r($itsAnArray);    
    
    echo "<br>";
    echo "<br>";
   $itsAnArray = [1,2,3,"Yo",'<h4>its H4 tag </h4>'];
   //printing whole array
   echo "<br>";
   echo "<br>";
   echo "<h2>Printing Whole Array with 'print_r' function</h2>";
   print_r($itsAnArray); 

   $newArray = [1,2,3,4,5,6,'yo'];

    echo"<br>";
    echo"<br>";
    echo "<h1> Using for loop</h1>";
   //with for loop
    for($i=0; $i< count($itsAnArray); $i++)
    {
        print ("Its --" . $itsAnArray[$i]."<br>");
    }
    
?>
</body>
</html>