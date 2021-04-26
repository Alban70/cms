<?php
//include __DIR__ . '/mySeoMenuCM.php;
//include __DIR__ . '/mySeoTopNav.php;
?>
<nav class="myheader2">

    <div id="h_hm_crm_nav_bar3" class="hpTop">
        <?php
        include __DIR__ . '/myGuideNavHorizMyheader.html.php';
        ?>
        <div id="hamburger" class="content" style="width: 80%; !important;">

            <div class="content" style="height: 100%; !important;">
                <h1 id="txtMenu" class="txt_menu_white_centre" style="color:white; padding: 0 0 0 4vh; !important;">GUIDE SEO</h1>
            </div>
        </div>
        <div id="cross" class="menuCacherSM">
            <ul id="menu" class="CPmenuUL">
                <li class="CPmenuLI"><a href= "<?php echo \Lib\Application::$racine; ?>societe">Société</a></li>
                <li class="CPmenuLI"><a href="<?php echo \Lib\Application::$racine; ?>Sfa">Référencement</a>
                    <ul class="CPcacher">
                        <li><a href="<?php echo \Lib\Application::$racine; ?>referencementNaturel">Seo</a></li>
                        <li><a href="<?php echo \Lib\Application::$racine; ?>Seo/option">Option Seo</a></li>
                    </ul>
                </li>
                <li class="CPmenuLI"><a href="<?php echo \Lib\Application::$racine; ?>Sea">Google Adwords</a></li>
                <li class="CPmenuLI"><a href="<?php echo \Lib\Application::$racine; ?>ReseauxSociaux">Réseaux sociaux</a></li>
                <li class="CPmenuLI"><a href="<?php echo \Lib\Application::$racine; ?>FormationReferencement">Formation</a>
                    <ul class="CPcacher">
                        <li><a href="<?php echo \Lib\Application::$racine; ?>FormationSeo">Seo</a></li>
                        <li><a href="<?php echo \Lib\Application::$racine; ?>FormationSea">Sea</a></li>
                    </ul>
                </li>
                <li class="CPmenuLI"><a href="<?php echo \Lib\Application::$racine; ?>tarifs">Tarifs</a></li>
                <li class="CPmenuLI"><a href= "<?php echo \Lib\Application::$racine; ?>blog">Blog</a></li>
                <li class="CPmenuLI"><a href="<?php echo \Lib\Application::$racine; ?>logiciel-force-de-vente/logiciel-force-de-vente">Guide</a></li>
                <li class="CPmenuLI"><a href="#">Contact</a></li>
            </ul>
        </div>
        <div id="dHamburger" class="container">
            <div class="bar1" style="color:#ffc107; !important;"></div>
            <div class="bar2" style="color:#ffc107; !important;"></div>
            <div class="bar3" style="color:#ffc107; !important;"></div>
        </div>
        <div id="dCross" class="changeCacher">
            <div class="bar1" style="color:#ffc107; !important;"></div>
            <div class="bar2" style="color:#ffc107; !important;"></div>
            <div class="bar3" style="color:#ffc107; !important;"></div>
        </div>


    </div>


</nav>