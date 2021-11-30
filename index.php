<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/prism.css" />
    <link rel="stylesheet" href="./css/simple.css">
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Lorem, ipsum.</h1>
    </div>
    <div class="container">
        <div class="slider single-item">
            <div><img src="./images/Girl-with-a-Pearl-Earring-canvas-Johannes-1665.jpg" alt=""></div>
            <div><img src="./images/300px-Johannes_Vermeer_-_Het_melkmeisje_-_Google_Art_Project.jpg" alt=""></div>
            <div><img src="./images/Screen-Shot-2021-08-24-at-11.33.06-AM.png" alt=""></div>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- slick slider -->
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/prism.js"></script>
    <script>
    $(document).ready(function() {
        $(".single-item").slick({
            "setting-name": "setting-value",
        });
    });
    </script>

</body>

</html>