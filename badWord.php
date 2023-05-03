<?php

$paragraph = $_GET["paragraph"];
$paragraphLen = strlen($paragraph);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Paragraph</h3>
    <p>
        <?php
        echo ($paragraph);
        echo ($paragraphLen);
        ?>

    </p>

    <p>
    <h3> Paragraph lenght</h3>
    <?php
    echo ($paragraphLen);
    ?>
    </p>

    <p>
    <h3> Censored paragraph</h3>
    <?php
    $badWord = $_GET["badWord"];
    echo str_replace($badWord, "***", $paragraph)
        ?>
    </p>

</body>

</html>