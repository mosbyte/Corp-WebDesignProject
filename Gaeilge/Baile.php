<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Baile</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../corp.js"></script>
</head>
<body>

<img src="../media/culra2.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "I ndiaidh a chéile a thógtar <br>
        na Caisleáin, Aithnítear díograis"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Fáilte go Corp</h1>
            <p>
                Is spórtlann Gaelach sa Chabhán muidne, oiriúnach don té ata díograsach.
                Bi linn chun do chuid aclaíochta a fheabhsú 's beidh tú comh folláin le breac.
                Is iomaí an rang atá againn a bhainfeá sult as...Breathnaigh orthu <a href="Ranganna.php">Anseo</a>
            </p>
            <br>
            <iframe width=100% height="300em" src="https://www.youtube.com/embed/9c5bg-BwSgI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        </div>

        <div id="main-body-right">
            <?php include('uaireanta.php');?>
            <?php include('Laisceanna.php');?>
        </div>
    </div>
    <div id="bottom">
        <?php include('bun.php');?>
    </div>
</div>
</body>
</html>
