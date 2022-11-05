<?php
class controller{

    public function auth(){
        if(!isset($_SESSION["auth_login"])){
            $_SESSION['error_login'] = "Chưa đăng nhập";
            $this->redirect($this->base_url("login"));
            die();
        }
    }

    public function base_url($url = '')
    {
        $a = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
        if ($a == 'http://localhost') {
            $a = _WEB_ROOT;
        }
        return $a.'/'.$url;
    }

    public function redirect($url)
    {
        header("Location: {$url}");
        exit();
    }

    public function view($path){
        $view = "views/".$path.".php";
        $layout = "views/layout/layout.php";
        include($layout);
    }
}