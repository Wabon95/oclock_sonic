<?php

class CharacterModel extends CoreModel {
    
    private $description;
    private $picture;
    private $type_id;
    private $typeName;

    // SETTERS
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setPicture($picture) {
        $this->picture = $picture;
    }
    public function setType_id($type_id) {
        $this->type_id = $type_id;
    }
    public function setTypeName($typeName) {
        $this->typeName = $typeName;
    }

    // GETTERS
    public function getDescription() {
        return $this->description;
    }
    public function getPicture() {
        return $this->picture;
    }
    public function getType_id() {
        return $this->type_id;
    }
    public function getTypeName() {
        return $this->typeName;
    }
}