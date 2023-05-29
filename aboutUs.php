<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutUs.css">
    <link rel="stylesheet" href="css/header.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <?php include "header.php" ?>
    <div class="about-us-container">


        <div class="aboutUs-banner">
            <img src="img/aboutUs-banner.png">
        </div>

        <div class="about-us-content">
            <div class="title">
                <h1>About Us</h1>
            </div>
            <div>
                <p class="aboutUs-divider"><b>Homepage </b> > About us</p>
            </div>
            <div class="text-section">
                <p class="aboutUs-text">Bighug.com is an innovative online store that specializes in selling high-quality heat cushions designed to provide comfort and relaxation to our valued customers. At Bighug.com, we strongly believe that heat therapy is one of the best ways to calm the body and promote overall wellness. As such, we offer a wide range of heat cushions to suit the unique needs and preferences of our diverse clientele.Our heat cushions are carefully crafted using only the finest materials, ensuring optimal durability and functionality. With ease of use and maximum comfort in mind, each cushion is designed to deliver soothing warmth and relaxation to various parts of the body, such as the neck, shoulders, back, and legs.At Bighug.com, our mission is to provide our customers with top-of-the-line products that help them relax and reduce their daily stress levels. We are committed to delivering the highest quality heat cushions that are not only effective but also affordable. With our user-friendly website and excellent customer service, shopping at Bighug.com is always a breeze.Whether you're looking to unwind after a long day at work, alleviate muscle pain.</p>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuIcon = document.querySelector('.menu-icon');
            const menuItems = document.querySelector('.menu-items');
            const menuItemVisible = document.querySelectorAll('.menu-item-visible');

            menuIcon.addEventListener('click', function() {
                menuItems.classList.toggle('show');
                menuIcon.querySelector('.fa-bars').classList.toggle('hide');
                menuIcon.querySelector('.fa-times').classList.toggle('show');
            });

            menuItemVisible.forEach(function(item) {
                item.addEventListener('click', function() {
                    menuItems.classList.remove('show');
                    menuIcon.querySelector('.fa-bars').classList.remove('hide');
                    menuIcon.querySelector('.fa-times').classList.remove('show');
                });
            });
        });
    </script>
</body>

</html>