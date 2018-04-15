<!DOCTYPE html>
<html lang="ga-ie">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<img src="../media/culra5.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Please get in contact if you want <br>
        any information about CORP"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Details:</h1>
            <p>Phone: <a href="#">+353 86 987 2345</a> </p>
            <p>Email: <a href="mailto:eolas@corp.com">eolas@corp.com</a></p>
            <br/>
        </div>
        <div id="main-body-right">
            <?php include('OpeningTimes.php');?>
        </div>
    </div>
    <div id="bottom">
        <?php include('footer.php');?>
    </div>
</div>
</body>
</html>