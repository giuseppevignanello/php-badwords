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
    <header class="text-center text-white py-2 bg-danger">
        <h1>The Censor</h1>
    </header>

    <div class="container">
        <form action="badWord.php" method="get">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-white">Write a pargraph</label>
                <textarea class="form-control" name="paragraph" id=paragraph rows="3"></textarea>
            </div>
            <div class="my-2">
                <label for="badWord" class="text-white">Select a Bad Word</label>
                <input class="form-control" type="text" name="badWord" id=badWord>
            </div>
            <div class="my-2">
                <button class="btn-danger btn" type="submit">
                    Submit
                </button>
            </div>


        </form>
    </div>


</body>

</html>