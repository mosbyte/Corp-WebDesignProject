<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Balraiocht</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="media/culra1.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Bi mar bhall rialta agus <br>
        cuid de phobail 'CORP' "
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Lion an Foirm</h1>
            <form name="q2" id="q2" method="post">
                Info1:
                <input type="text" name="p1"><br>
                Info2:
                <input type="text" name="p2"><br>
                Info3:
                <input type="text" name="p3"><br>
                Info4:
                <input type="text" name="p4"><br>
                Info5:
                <input type="text" name="p5"><br>
                Info6:
                <input type="text" name="p6"><br>
                <input type="submit" value="Submit!!">
            </form>
            <script>q2()</script>
            <br>
        </div>
        <div id="main-body-right">
            <h1>Lascainne inniu</h1>
            <ul>
                <li>10% as an <a href="Balraiocht.php">Sportlann</a></li>
                <li>20% as na <a href="Ranganna.php">Ranganna</a></li>
            </ul>
            <h2><a href="Balraiocht.php">Balriocht</a> </h2>
        </div>
    </div>

</div>
</body>
</html>