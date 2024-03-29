<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>

<body>
    <h1>
        <?php
        $myString="This is a String";
        echo $myString;

        //Length of string
        echo strlen(($myString));

        //Number of Words
        echo str_word_count($myString); 

        //Position of substring
        echo strpos($myString,"is");

        //Replace substing
        echo str_replace("String","best string", $myString);

        
        ?>
    </h1>

</body>

</html>