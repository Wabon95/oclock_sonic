<?php

class MainController extends CoreController {

    public function home() {
        $db = new Database();
        $characters = $db->getCharacters();
        $this->show('home', ['caracters' => $characters]);
    }
    public function home_v2() {
        $db = new Database();
        $characters = $db->getCharacters();
        $this->show('home_v2', ['caracters' => $characters]);
    }
    
    public function creators() {
        $this->show('creators');
    }
}