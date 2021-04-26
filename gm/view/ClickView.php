<?php

namespace view;
class ClickView extends ViewBase{

    public function getTitle()
    {
        if($this->model->isClicked)
        {        
            return "My Clicked title";
        }
        else{
            return "My SEO title";
        }
    }

    public function getContent()
    {
        if($this->model->isClicked)
        {
            echo '<p><a href="/cms">' . $this->model->string . "</a></p>";
        }
        else{
            //echo '<p><a href="seo-test-url">' . $this->model->string . "</a></p>";
        }
    }
}