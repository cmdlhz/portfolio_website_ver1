<?php
    require("model/frontend/4_acct/Acct_manager.php");

    function signup_page(){
        require("view/frontend/4_acct/signup_page.php");
    }

    function login_page(){
        require("view/frontend/4_acct/login_page.php");
    }

    function login_kakao(){
        require("view/frontend/4_acct/login_kakao.php");
    }

    function logout_page(){
        require("view/frontend/4_acct/logout_page.php");
    }

    function access_acct($username, $email, $password){
        $Acct_manager = new Acct_manager();
        $user = $Acct_manager->register_user($username, $email, $password);

        if($user === false){
            throw new Exception("Impossible to register your account!");
        } else{
            header("Location: index.php?action=after_signup");
        }
    }

    function logged_user ($username, $password) {
        $logged_in_user = new Acct_manager();

        $user = $logged_in_user->login_user($username, $password);
        require("view/frontend/4_acct/acct_logged.php");
    }