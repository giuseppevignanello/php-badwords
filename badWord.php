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
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <header class="text-center text-white bg-danger py-2">
            <h1>The censor</h1>
        </header>
        <h3 class="text-center"> Paragraph</h3>
        <p class="bg-light p-3 rounded">
            <?php
            echo ($paragraph);
            ?>

        </p>
        <h3 class="text-center"> Paragraph lenght</h3>
        <p class="bg-light p-3 rounded">

            <?php
            echo ($paragraphLen);
            ?>
        </p>
        <h3 class="text-center"> Censored paragraph</h3>
        <p class="bg-light p-3 rounded">

            <?php
            $badWord = $_GET["badWord"];
            echo str_replace($badWord, "***", $paragraph)
                ?>
        </p>
    </div>



</body>

</html>