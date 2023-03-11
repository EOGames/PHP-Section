<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    </style>
</head>
<body>
    <?php
    echo "NOOB";
    

    $name = "<br>MR. Coder";
    $num = 100;

    //using multyple variable in single line use '.'
    echo $name . $num;
    //adding multyple variable through echo but in string format
    echo "${name} ${num}";
    //with break tag for spacing
    echo "${name} <br> ${num}";
    $fontColor = "color:red";
    $fontsize = "font-size:50px"; 
    echo "<h1 style=${fontColor};${fontsize};>Yo Coder</h1>"
    ?>
</body>
</html>