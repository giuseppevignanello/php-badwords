<?php

$paragraph = $_GET["paragraph"];



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

    <h1>Paragraph</h1>
    <p>
        <?php
        echo ($paragraph);
        ?>

    </p>

</body>

</html>