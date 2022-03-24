<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="tp4css.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $resultado="0";
    switch ($_POST["radio"]) {
        case '1': $resultado=$_POST["num"] + $_POST["num2"];
                    echo'<p>La suma es: ' .$resultado.'</p>';
            break;
        case '2':$resultado=$_POST["num"] - $_POST["num2"];
                echo'<p>La resta es: ' .$resultado.'</p>';
            break;
        case '3':$resultado=$_POST["num"] * $_POST["num2"];
                echo'<p>La multiplicacion es: ' .$resultado.'</p>';
            break;

        case '4':
            
            if($_POST["num2"]==0){
                echo'<p>el divisor nunca puede ser 0</p>';
            }
            else{
            
            
            $resultado=$_POST["num"] / $_POST["num2"];
                echo'<p>La division es: ' .$resultado.'</p>';}
         break;

    }


    ?>

</body>
</html>