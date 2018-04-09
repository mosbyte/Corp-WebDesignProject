<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../corp.js"></script>
</head>
<body>
<img src="../media/culra2.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Rome was not built in a <br>
        Day, Commitment is recognised"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Welcome to Corp</h1>
            <p>
                We are an Irish Gym, that is suited to the committed.
                Join us to help improve your fitness and be in great health.
                We have many classes at CORP that you will enjoy and great facilities...Check them out <a href="Classes.php">here.</a>
            </p>
            <br>
            <iframe width=100% height="300em" src="https://www.youtube.com/embed/9c5bg-BwSgI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div id="main-body-right">
            <?php include('OpeningTimes.php');?>
            <?php include('Deals.php');?>
        </div>
    </div>
    <div id="bottom">
        <?php include('footer.php');?>
    </div>
</div>

</body>
</html>
