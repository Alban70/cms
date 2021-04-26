<?php
namespace controller;
class ClickController extends ControllerBase{

    public function clicked() {
        $this->model->string = 'Updated Data, thanks to MVC and PHP!';
        $this->model->isClicked = true;
    }
}