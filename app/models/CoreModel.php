<?php

class CoreModel {
    
    protected $id;
    protected $name;
    protected $created_at;
    protected $updated_at;

    // GETTERS
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getCreated_at() {
        return $this->created_at;
    }
    public function getUpdated_at() {
        return $this->updated_at;
    }
}