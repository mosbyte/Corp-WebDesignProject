<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Balraiocht</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../corp.js"></script>
</head>
<body>
<img src="../media/culra1.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Bí mar bhall rialta agus <br>
        cuid de phobail 'CORP' i<br>
        gcomhar 35 euro an mí"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Líon an foirm:</h1>
            <form name="memForm" id="membershipForm" method="post">
                Ainm:
                <input type="text" name="fn" value="Céad Ainm"/>
                <input type="text" name="sn" value="Sloinne"/><br/>
                RPhost:
                <input type="text" name="email"><br>
                Aois:
                <select name="age">
                    <option value="a">18-24</option>
                    <option value="b">25-55</option>
                    <option value="c">55+</option>
                </select><br>

                Inscne:
                <input type="radio" name="continue" checked>Fear
                <input type="radio" name="continue" >Bean
                <br>
                Méid Míosa:
                <input type="number" name="duration"><br>
                Múinín sa Gym:
                0<input type="range" name="confidence">100<br>
                Cód laisceanna:
                <input type="text" name="discount"><br>

                <button id="Join">Glac</button>
                <script>formBaill()</script>
            </form>

            <br>
        </div>
        <div id="main-body-right">
            <?php include('Laisceanna.php');?>
        </div>
    </div>
    <div id="bottom">
        <?php include('bun.php');?>
    </div>
</div>
</body>
</html>