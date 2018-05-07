<?php

class Controler
{
    protected $url;
        
    public function getURL()
    {
        $url = $_SERVER['REQUEST_URI'];
        return $url;
    }
}