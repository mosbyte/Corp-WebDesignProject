<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ranganna</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<img src="../media/culra3.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Roghnaigh do rang <br>
        agus bi linn"
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
                    <td>Luain 6-8</td>
                    <td>5 euro</td>
                    <td><a href="">Bookail</a></td>
                </tr>
                <tr>
                    <td>Rothaiocht</td>
                    <td>Mairt & Aoine 8.00-9.30</td>
                    <td>10 euro</td>
                    <td><a href="">Bookail</a></td>
                </tr>
                <tr>
                    <td>eolas</td>
                    <td>eolas</td>
                    <td>eolas</td>
                    <td><a href="">eolas</a></td>
                </tr>
                <tr>
                    <td>eolas</td>
                    <td>eolas</td>
                    <td>eolas</td>
                    <td><a href="">eolas</a></td>
                </tr>
                <tr>
                    <td>eolas</td>
                    <td>eolas</td>
                    <td>eolas</td>
                    <td><a href="">eolas</a></td>
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