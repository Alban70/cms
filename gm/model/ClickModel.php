<?php

namespace model;
class ClickModel extends ModelBase
{
    public $string;
    public $isClicked;

    public function __construct(){
        $this->string = "MVC + PHP = Awesome, click here!";
        $this->isClicked = false;
    }
    
}