<?php
namespace controller;
class ControllerBase
{
    protected $model;

    public function __construct($model){
        $this->model = $model;        
    }   
}