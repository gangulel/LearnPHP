<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var="10";
        $number=(int)$var;

        if (is_int($number)){
            echo "The variable is an integer";
        }
        else{
            echo "The variable is not an integer";
        }
    ?>
</body>
</html>