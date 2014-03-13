<?php

class Character {
    
    private $error = "";
    
    public function __construct($name=null) {
        if($name != null) {
            $this->name = $name;
        }
        $this->load();
    }
    
    public function load()
    {
        if(isset($this->name)) {
            // Load Character
        }
    }
    
    public function save()
    {
        try {
            // Save character to text file in /characters folder
        }
        catch(Exception $e) {
            $this->error = $e->getMessage();
        }
    }
    
    public function set_error($error) {
        $this->error = $error;
    }
    
    public function get_error($error) {
        return $this->error;
    }
    
}
