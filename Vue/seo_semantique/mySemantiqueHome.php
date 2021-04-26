<nav>
    <?php
    //include __DIR__ . '/mySeoAuditTopRightSousMenuImages.php';
    include __DIR__ . '/mySeoAuditTopRightSousMenu.php';
    ?>
</nav>
<section id="audit" class="content_top">
    <div class="content">
        <?php
        include __DIR__ . '/mySemantiqueSlogan.php';
        ?>
    </div>
    <div class="view_flex content_degrade" style="width:95%; margin: 0 auto 2vh;border-radius:10px;
    border:1px solid inherit;height: auto; !important;">
        <div class="view_content view_content_2cols_60"
             style="height: auto; margin: 0 auto; padding: 2vh 0;  !important;">
            <div class="view_content view_content_2cols_70" style="padding: 1%; margin: 0 auto; background-color: #FF8155; border-radius:10px;
    border:1px solid #FF8155; !important;">
                <h1 class="txt_menu_white_centre" style="color: white; text-align: center; !important;">Comment mettre en place un maillage interne !</h1>
            </div>
            <div class="content" style="padding: 3% 0 0 0; !important;">
                <p class="txt_slogan">
                    Pour illustrer ce principe, prenons le cas d’un tour opérateur, celui-ci propose des voyages par région et des circuits à thèmes.
                    Dans cette exemple les circuits seront rattachés aux pages principales « voyages par région », nous avons créés un segment principal suivi d’une longue traîne. www.voyage/alsace/decourvrir-vignobles/ Ainsi toutes les articles par thème se référent à leur page mère. Ce principe permet de remédier au problème des pages web dits « orphelines » illustrer dans notre image.
                    Cette segmentation sémantique est d’autant plus utile si le mots clés principale indexé sur une de vos pages principales est très concurrentiels, le fait de rattachés un grand nombre de pages enfants avec des mots secondaires apporte du juice SEO au mots clés présent dans l’url.
                </p>
                <p class="txt_slogan">
                    Le principe de segmentation doit être néanmoins utiliser à bonne escient, plusieurs paramètres de l’audit nous permettent de définir la structure à mettre en place afin d’atteindre la meilleure position de vos pages dans les moteurs de recherches.
                    En effet, ce type de structure n’est pas une fin en soi ou l’unique façon de d’organiser la structure de votre site Web, plusieurs options existent, notre expérience nous permettra de définir avec vous la meilleure organisation à adopter selon votre cas.
                </p>
            </div>
        </div>
        <div class="view_content view_content_2cols_30"
             style=" height: auto; margin: auto; !important;">
            <div id="i" class="deviceCacher device"
                 style="width: 70%; height: auto; margin: 0 auto ; padding: 0; !important;">
                <img src="<?php echo \Lib\Application::$racine; ?>\images\seo\rapport_position.png" alt="logo"
                     style="width: 100%; /*padding-bottom: 4vh;*/ height: auto; !important">
            </div>
        </div>
    </div>
</section>