<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        function your_name($name){
            return $name."Ram"." "." ram";
        }
        $final_name=your_name("Shree");
        echo $final_name;
        ?>
    </h1>

</body>

</html>