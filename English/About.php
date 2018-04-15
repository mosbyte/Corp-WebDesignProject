<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<img src="../media/culra4.jpg" id="background-image" alt="iontach"/>

<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Any person can succeed <br>
        with the correct information"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>About us</h1>
            <p>
                We are an Irish Gym located in Cavan town just beside the bookshop.<br><br>
                We aim to improve the health and fitness of every person who comes through our doors.<br>
                Exercise is a great way to maintain positive mental health and relieve stress which is very important.<br>
                We provide all the best facilities for you to enjoy at competitive prices. Our classes are extremely
                popular and offer a way to make new friends who are also into fitness. <br><br>
                So <a href="Membership.php">join</a> today and you will be as fit as a fiddle before you know it. Take a look at our classes <a href="Classes.php">here</a>.
            </p>
            <br>
        </div>
        <div id="main-body-right">
            <?php include('OpeningTimes.php');?>
            <h1>Location</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2350.012619234837!2d-7.36939333282016!3d53.913751662979784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d53.9135494!2d-7.3732235!5e0!3m2!1sen!2sie!4v1523311870793"
                     allowfullscreen></iframe><br><br>
        </div>
    </div>
    <br>

    <div id="bottom">
        <?php include('footer.php');?>
    </div>
</div>
</body>
</html>