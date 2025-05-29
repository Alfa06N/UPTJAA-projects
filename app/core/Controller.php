<?php
class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require __DIR__ . "/../views/$view.php";
    }
    
    protected function model($model) {
        require __DIR__ . "/../models/$model.php";
        return new $model();
    }
}