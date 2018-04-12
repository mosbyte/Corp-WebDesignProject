<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membership</title>
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../corp.js"></script>
</head>
<body>
<img src="../media/culra1.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Become a regular member and <br>
        part of the 'CORP' community for<br>
        just 35 euro a month"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Fill in the form:</h1>
            <form name="memForm" id="membershipForm" method="post">
                Name:
                <input type="text" name="fn" value="First name"/>
                <input type="text" name="sn" value="Second Name"/><br/>
                Email:
                <input type="text" name="email"><br>
                Age:
                <select name="age">
                    <option value="a">18-24</option>
                    <option value="b">25-55</option>
                    <option value="c">55+</option>
                </select><br>

                Gender:
                <input type="radio" name="continue" checked>Male
                <input type="radio" name="continue" >Female
                <br>
                Duration(months):
                <input type="number" name="duration"><br>
                Gym Confidence:
                0<input type="range" name="confidence">100<br>
                Discount Code:
                <input type="text" name="discount"><br>

                <button id="Join">Join</button>
                <script>memform()</script>
            </form>

            <br>
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