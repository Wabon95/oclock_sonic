<?php

class CoreController {

    protected function show($template, $data = []) {
        global $router;
        require_once __DIR__.'/../views/header.php';
        require_once __DIR__.'/../views/'.$template.'.php';
        require_once __DIR__.'/../views/footer.php';
    }
}