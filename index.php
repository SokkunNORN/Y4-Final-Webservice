<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAM: Computer</title>

    <!-- Header -->
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/global-header.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-section.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.classes.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.css-reset.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.appearance.color.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.appearance.typography.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-utility.icon.glyph.css" />
    <link rel="stylesheet" type="text/css" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/326786/dc-element.nav-menu.css" />

    <!-- Slide Show -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic">
    <link rel="stylesheet" href="./style/slideShow.css">


    <!-- Slide Show -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
</head>
<body>
    <?php
        require('./components/header.php');
        require('./view/home.php');
    ?>

    <!-- Slide Show -->
    <script src="./js/slideShow.js"></script>
</body>
</html>