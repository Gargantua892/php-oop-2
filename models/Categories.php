<?php

require_once "Trait.php";

class Category {
    use CommonTrait;

    private $icon;

    public function __construct($icon, $name) {

        $this -> setIcon($icon);
        $this -> setName($name);
    }
    
    public function getIcon() {
        
        return $this -> icon;
    }
    public function setIcon($icon) {

        $this -> icon = $icon;
    }
}