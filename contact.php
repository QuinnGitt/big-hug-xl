<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/header.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <title>Contact</title>
</head>

<body>
    
<?php include "header.php"?>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d75676.64269122249!2d5.05370904782292!3d52.08280859608431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c668a291ed7f45%3A0x9b18dabb8687ad2!2sMBO%20Utrecht!5e0!3m2!1snl!2snl!4v1681805827589!5m2!1snl!2snl" width="1519" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
<div id="lijn"><a href="index.php">Homepage ></a> <h4>Contact</h4></div>

<section id="cinfo">
<img id="bigimg" src="img/the_big_hug.png" alt="The Bighug">

<div id="contactinfo">
    <p class="info">Daltonlaan 300<br>3584 BK Utrecht</p>
    <p class="info">Australiëlaan 23<br>3502 KA Utrecht</p>
    <p class="info"><img src="img/mail.png" alt="mailicon"> <a href="mailto:335352@student.mboutrecht.nl">335352@student.mboutrecht.nl</a><br><img src="img/phone.png" alt="phoneicon"><a href="tel:+31 6 27889238"> +31 6 27889238</a></p>
    <p class="info"><img src="img/mail.png" alt="mailicon"> <a href="mailto:info@mboutrecht.nl">info@mboutrecht.nl</a><br><img src="img/phone.png" alt="phoneicon"><a href="tel:+31 302815100"> +31 302815100</a></p>
</div>
</section>

<div id="contactformulier">
    <h1>Contactformulier</h1>
    <form action="#" method="post">
    <input type="text" class="input" id="naam" name="naam" required placeholder="Naam..."><br>
    <input type="tel" class="input" id="telefoonnummer" name="telefoonnummer" required placeholder="Telefoonnummer..."><br>
    <input type="email" class="input" id="email" name="email" required placeholder="E-mail..."><br>
    <textarea id="vraag_opmerking" class="input" name="vraag_opmerking" rows="4" cols="50" placeholder="Vraag / Opmerking..."></textarea><br>
    <input type="checkbox" class="custom-checkbox" id="nieuwsbrief" name="nieuwsbrief" value="ja">
    <label id="nieuwsbrief" for="nieuwsbrief">Ja, ik ga akkoord met de privacyverklaring en ik ontvang graag de nieuwsbrief:</label>
    <br>
    <input type="submit" value="Verzenden" class="button">
    </form>
</div>

<?php include "footer.php"?>

</body>
</html>