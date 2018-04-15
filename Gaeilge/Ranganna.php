<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ranganna</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../corp.js"></script>
</head>
<body>
<img src="../media/culra3.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Roghnaigh do rang <br>
        agus bí linn"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Ranganna</h1>
            <table>
                <thead>
                <tr>
                    <th>Rang</th>
                    <th>Cathain</th>
                    <th>Costas</th>
                    <th>Book</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>Pilates</td>
                    <td>Luain 6pm-8pm</td>
                    <td>5 euro</td>
                    <td><a href="javascript:bookRang('Pilates')">Bookáil</a></td>
                </tr>
                <tr>
                    <td>Rothaíocht</td>
                    <td>Máirt & Aoine 8.00am-9.30am</td>
                    <td>10 euro</td>
                    <td><a href="javascript:bookRang('Rothaiocht')">Bookáil</a></td>
                </tr>
                <tr>
                    <td>Dornaclaíocht</td>
                    <td>Ceadaoin 3pm-5pm</td>
                    <td>7 euro</td>
                    <td><a href="javascript:bookRang('Dornaclaiocht')">Bookáil</a></td>
                </tr>
                <tr>
                    <td>Ciorclán</td>
                    <td>Gach lá 12pm-2pm</td>
                    <td>3 euro</td>
                    <td><a href="javascript:bookRang('Ciorclan')">Bookáil</a></td>
                </tr>
                <tr>
                    <td>Zumba</td>
                    <td>Deardaoin 7.30pm-9.30pm</td>
                    <td>8 euro</td>
                    <td><a href="javascript:bookRang('Zumba')">Bookáil</a></td>
                </tr>


                </tbody>
            </table>
            <br><br>
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