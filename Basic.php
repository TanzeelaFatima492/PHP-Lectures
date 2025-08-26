<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="container">

        <?php 
        //simple output 
        echo "Hello World!"; 

        //This function dumps information about one or more variables:
            $var1=34;
            $var2=90;
        var_dump($var1, $var2, ...);

        //Defining Variables
        $Title = "PHP";
        echo $Title;

        // Datatypes
        $x = "Tanzeela"; 
        $a =10;
        $f =20.90;
        echo $a;
        echo $x;
        echo $f

        //Array
        $names = array("Fatima","Rohan","Shubham");
        var_dump($names);
        echo $names[3];

        // String Operators

//         Concatenation
// Concatenation of $txt1 and $txt2:

// $txt1 . $txt2

// Concatenation assignment
// Appends $txt2 to $txt1:

// $txt1 .= $txt2
        ?>
    </div>
</body>
</html>