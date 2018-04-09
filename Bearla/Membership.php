<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Membership</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<img src="../media/culra1.jpg" id="background-image" alt="iontach"/>
<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Become a regular member and <br>
        part of the 'CORP' community"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Fill in the form:</h1>
            <form name="q2" id="membershipForm" method="post">
                Name:
                <input type="text" value="First name"/>
                <input type="text" value="Second Name"/><br/>
                Email:
                <input type="text"><br>
                Age:
                <select>
                    <option value="a">18-24</option>
                    <option value="b">25-55</option>
                    <option value="c">55+</option>
                </select><br>

                Gender:
                <input type="radio" name="continue" checked>Male
                <input type="radio" name="continue" >Female
                <br>
                Duration(months):
                <input type="number"><br>
                Gym Confidence:
                0<input type="range">100<br>
                Discount Code:
                <input type="text"><br>

                <button id="Join" type="submit">Join</button>
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