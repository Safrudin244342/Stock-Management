<?php

class HomePage {

    function home(): void {
        if (isset($_COOKIE['userLogin'])) {
            header("location: /product");
        } else {
            header("location: /login");
        }
    }

    function login(): void {
        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/Login.php");
    }

    function loginCheck(): void {
        echo $_POST["tPassword"];
    }

}

?>