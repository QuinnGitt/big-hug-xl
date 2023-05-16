<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/infopage.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Infopage</title>
</head>
<body>
<?php include "header.php"?>

    <div class="upper-text">
        <div class="upper-text-content">
            <img class="title" src="img/the_big_hug.png" alt="Big Hug">
            <p class="text-1">Wij verwarmen mensen, niet de planeet</p>
            <p class="text-2">
                Met een Big Hug warmtedeken verwen je jezelf pas echt.
                Lekker warm loungen op de bank terwijl je je favoriete serie kijkt,
                of geef je rug ultieme ontspanning tijdens het werken en plof neer op je Big Hug in je bureaustoel. 
            </p>
        </div>
        <img class="image"src="img/info-banner.png" alt="info banner">
    </div>
    <div class="page-divider"><p class="page-divider-text">Homepage > Big Hug</p></div>
    <div class="big-hug-content">
        <div class="big-hug-text">
            <p>
                Big Hug-kussen is een draagbaar,
                duurzaam en comfortabel verwarmingsapparaat
                dat gebruikt kan worden zowel binnen als buiten.
                Het kussen is gemaakt van gerecyclede materialen
                en biedt tot 8 uur warmte op een enkele lading.
                Het heeft drie temperatuurinstellingen en is gebruiksvriendelijk.
                Het Stoov Big Hug-kussen biedt duurzaamheid,
                gemak en comfort en is daarmee een betere keuze dan de concurrentie.
            </p>
        </div>

        <img id="slide" onclick="nextslide()" class="big-hug-img"src="img/woolly-wit.png" alt="big-hug">
    
    </div>

    <script src="js/info.js"></script>
    <?php include "footer.php" ?>
</body>
</html>