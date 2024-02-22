<?php
class Controller {
    protected function render($path, $parametres = [], $layout = '') {
        ob_start();
        require_once (__DIR__ . '/../views/'. $path . '_view.php');
        $content = ob_get_clean();
        require_once (__DIR__ . '/../views/layout/'. $layout .'_layout.php');
    }
}