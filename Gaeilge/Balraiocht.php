<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Balraiocht</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<img src="../media/culra1.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Bi mar bhall rialta agus <br>
        cuid de phobail 'CORP' "
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Lion an Foirm</h1>
            <form name="q2" id="membershipForm" method="post">
                Ainm:
                <input type="text" value="cead ainm"/>
                <input type="text" value="sloinne"/><br/>
                Aois:
                <select>
                    <option value="a">18-24</option>
                    <option value="b">25-55</option>
                    <option value="c">55+</option>
                </select><br>

                Inscne:
                <input type="radio" name="continue" checked>Fear
                <input type="radio" name="continue" >Bean
                <br>
                Meid Miosa:
                <input type="number"><br>
                Muinin sa Gym:
                0<input type="range">100<br>
                Cod laisceanna:
                <input type="text">

                <br/><button type="submit">Glac</button>
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