<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faoi</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<img src="../media/culra4.jpg" id="background-image" alt="iontach"/>

<?php include('ceann.php');?>
<div class="main">
    <p id="quote">
        "Éireoidh le duine ar <br>
        bith leis an eolas ceart"
    </p>

    <div id="main-body">
        <div id="main-body-left">
            <h1>Fúinn</h1>
            <p>
                Is spórtlann Gaelach muidne suite i mBaile an Chabháin in aice an Siopa Leabhar.<br><br>
                Déanann muid ár seacht ndícheall chun aclaiocht agus sláinte chuile duine a thagann trínár doirse a fheabhsú.<br>
                Is bealach den scoth é aclaíocht chun do chuid sláinte intinne dearfach a caomhnú agus chun faigh réidh le aon strus<br>
                Cuireann muid áiseanna iontacha ar fáil duit ar praghasanna maithe. Tá ár ranganna an-coitianta agus is slí deas iad
                chun cairdeas nua a dhéanamh le daoine atá bainteach le saol folláin fosta.<br><br>
                Glac <a href="Balraiocht">Balraíocht</a> inniu agus beidh tú comh folláin le breac gan thuileadh moille. Féach ar ár ranganna
                <a href="Ranganna.php">anseo</a>.
            </p>
            <br/>
        </div>
        <div id="main-body-right">
            <?php include('uaireanta.php');?>
            <h1>Suíomh</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2350.012619234837!2d-7.36939333282016!3d53.913751662979784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d53.9135494!2d-7.3732235!5e0!3m2!1sen!2sie!4v1523311870793"
                    allowfullscreen></iframe><br><br>
        </div>
    </div>
    <div id="bottom">
        <?php include('bun.php');?>
    </div>
</div>
</body>
</html>