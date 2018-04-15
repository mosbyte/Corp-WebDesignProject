<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Áiseanna</title>
    <link rel="stylesheet" href="../style.css">
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
            <h1>Rothaíocht</h1>
            <img src="../media/facilities/rothaiocht.jpg" alt="Rothaiocht" id="facility">
            <p id="aiseanna">
                Is iomaí an rothar ata againn chun do chuid aclaíochta a choinneail.
            </p>
            <br>
            <h1>Meáchan</h1>
            <img src="../media/facilities/ciotal.jpg" alt="Rothaiocht" id="facility">
            <p id="aiseanna">
                Bí ag tógáil matáin lenár meáchain
            </p>
            <br>

        </div>
        <div id="main-body-right">

            <h1>Snámh</h1>
            <img src="../media/facilities/linn.jpg" alt="Rothaiocht" id="facility">
            <p id="aiseanna">
                Ta linn snáimhe againn daoibh chun do scíth a ligint
            </p>
            <br>
            <h1>Láir</h1>
            <img src="../media/facilities/rith.jpg" alt="Rothaiocht" id="facility">
            <p id="aiseanna">
                Nach deas a bheith ag rith le ceoil
            </p>
            <br>

        </div>
        <h2><a href="Balraiocht.php">Balríocht</a> </h2>
    </div>
    <div id="bottom">
        <?php include('bun.php');?>
    </div>
</div>
</body>
</html>