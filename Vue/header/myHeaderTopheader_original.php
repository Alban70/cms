<section class="topheader">
    <div class="logo">
        <a href="<?php echo \Lib\Application::$racine; ?>">WC</a>
    </div>
    <div class="content_auto" style="padding-left: 1%; /*width: 27rem;*/ !important;">
    <?php
    //include __DIR__ . '/../inc/' . $file;
    include __DIR__ . '/myHeaderReseauSociaux.php';
    ?>
    </div>



    <div class="coordonnees">
        <ul>
            <li class="goog">
                <img src="<?php echo \Lib\Application::$racine; ?>\images\icon\tel-icon.png" alt"facebook">
                <a style ="letter-spacing: 1px; text-decoration: none; !important;" href="#">04 42 65 12 55</a>
            </li>
            <li class="email">
                <img src="<?php echo \Lib\Application::$racine; ?>\images\icon\mail-icon.png" alt"facebook">
                <!--<a href="<?php echo \Lib\Application::$racine; ?>contact">Contact@well-com-solutions.com</a>-->
                <a href="<?php echo \Lib\Application::$racine; ?>contact" class="txt_lien_blue">Contact@well-com-solutions.com</a>
            </li>
        </ul>
    </div>

    <div class="essai">
        <div class="demo" style="background-color: #ee3954">
            <a style="vertical-align: center" href="connexion2.php" class="myButton_crm">Audit Gratuit</a>
        </div>
        <!--<div class="demo">
            <a href="FonctionnaliteCRM.php" class="myButton_crm">Essai gratuit</a>
        </div>-->
        <!--<div class="demo">
            <a href="connexion2.php" class="myButton_crm">Connexion</a>
        </div>-->
        <?php //if (isset($_SESSION['auth']) AND $_SESSION['auth'] === true) : ?>
            <!--<div class="demo">
                <a href="?page=deconnexion" class="myButton_crm">Déconnexion</a>
            </div>-->
        <?php //else: ?>
            <!--<div class="demo">
                <a class="myButton_crm" href="<?php echo \Lib\Application::$racine; ?>connexion">Connexion</a>
            </div>-->
        <?php //endif; ?>

    </div>
</section>

