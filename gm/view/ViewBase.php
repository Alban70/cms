<?php
namespace view;
class ViewBase
{
    protected $model;
    protected $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

    //contient l'aspect général de la page
    public function render()
    {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge"/>    
                <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no">
                <link rel="stylesheet" type="text/css" media="screen" href="/cms/gm/resources/css/base.css" />
                <script src="/cms/gm/resources/js/jquery-3.3.1.js"></script>
        <?php
        echo "<title>".$this->getTitle()."</title>";
        ?>
            </head>
            <body>
        <?php
        $this->getContent();
        $this->buildCustomHeaderMeta();
        ?>
            </body>
        </html>
        <?php
        
    }

    public function getTitle()
    {
        return "Default title";        
    }

    //override la function pour ajouter les meta custom (keywords etc...)
    public function buildCustomHeaderMeta()
    {

    }

    //donne la main aux vues enfant pour générer le contenu
    public function getContent(){
        
    }    
}

?>