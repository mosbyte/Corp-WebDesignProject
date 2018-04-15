<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../corp.js"></script>
</head>
<body>
<img src="../media/culra3.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Choose a class <br>
        that suits you"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Classes</h1>
            <table>
                <thead>
                <tr>
                    <th>Class</th>
                    <th>When</th>
                    <th>Cost</th>
                    <th>Book</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>Pilates</td>
                    <td>Monday 6pm-8pm</td>
                    <td>5 euro</td>
                    <td><a href="javascript:bookClass('Pilates')">Book</a></td>
                </tr>
                <tr>
                    <td>Spinning</td>
                    <td>Tuesday & Friday 8am-9.30am</td>
                    <td>10 euro</td>
                    <td><a href="javascript:bookClass('Spinning')">Book</a></td>
                </tr>
                <tr>
                    <td>Boxercise</td>
                    <td>Wednesday 3pm-5pm</td>
                    <td>7 euro</td>
                    <td><a href="javascript:bookClass('Boxercise')">Book</a></td>
                </tr>
                <tr>
                    <td>Circuits</td>
                    <td>Everyday 12pm-2pm</td>
                    <td>3 euro</td>
                    <td><a href="javascript:bookClass('Circuits')">Book</a></td>
                </tr>
                <tr>
                    <td>Zumba</td>
                    <td>Thursday 7.30pm-9.30pm</td>
                    <td>8 euro</td>
                    <td><a href="javascript:bookClass('Zumba')">Book</a></td>
                </tr>

                </tbody>
            </table>
            <br><br>
        </div>
        <div id="main-body-right">
            <?php include('Deals.php');?>
        </div>
    </div>
    <div id="bottom">
        <?php include('footer.php');?>
    </div>
</div>

</body>
</html>