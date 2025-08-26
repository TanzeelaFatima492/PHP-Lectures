<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP foundation</title>
</head>
<body>
    <div class="con">
      <!-- //  *** Operators *** -->

      <?php

      // Arithmetic Operators
      $x=3;
      $y=7;

      echo $a+$b;

    //   Assignment Operators

    $a=0;

    // Comparison Operators

    // Not equal

    $echo $x <> $y;


    // Increment / Decrement Operators

    x++;
    echo $x;
    x--;
    echo $x;
    --y;
    echo $y;
    ++y
    echo $y;


    // PHP Logical Operators

     echo $a and $b;


    //  Conditional Assignment Operators

    // Ternary
    $expr1=7;
    $expr2=9;
    $expr3=19;
    $x = $expr1<8 ? $expr2 : $expr3;

    echo $x;
     
    // Returns the value of $x. The value of $x is expr2 if expr1 = TRUE. The value of $x is expr3 if expr1 = FALSE:
      
      //foreach ($InsertYourArrayName as $value) 

      $ar=array('hi',"now",'bye');
      foreach($ar as $value){
        echo $value;
      }
      ?>
    </div>
</body>
</html>