<?php

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

require("controller/frontend/0_header_and_footer.php");
require("controller/frontend/1_work.php");
require("controller/frontend/2_writings.php");
require("controller/frontend/3_about.php");
require("controller/frontend/4_acct.php");
require("controller/frontend/5_main_page.php");

try{
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'work'){
            work_list();
        } elseif($_REQUEST['action'] == 'writings'){
            writings();
        } elseif($_REQUEST['action'] == 'main_page'){
            main_page();
        } elseif($_REQUEST['action'] == 'about'){
            about();
        } elseif($_REQUEST['action'] == 'about_personality'){
            about_personality();
        } elseif($_REQUEST['action'] == 'about_interests'){
            about_interests();
        } elseif($_REQUEST['action'] == 'signup'){
            signup_page();
        } elseif($_REQUEST['action'] == 'after_signup' OR $_REQUEST['action'] == 'login'){
            login_page();
        } elseif($_REQUEST['action'] == 'login_kakao'){
            login_kakao();
        } elseif($_REQUEST['action'] == 'access_acct'){
            access_acct(htmlspecialchars($_REQUEST['username']), htmlspecialchars($_REQUEST['email']), htmlspecialchars($_REQUEST['password']));
            
        } elseif($_REQUEST['action'] == 'logged'){
            if(isset($_SESSION['username'])){
                logged_user($_SESSION['username'], null);
            } elseif(isset($_COOKIE['username'])){
                logged_user($_COOKIE['username'], null);
            } elseif(isset($_REQUEST['username'])){
                logged_user($_REQUEST['username'], $_REQUEST['password']);
                $_SESSION['username'] = $_REQUEST['username'];
                $_COOKIE['username'] = $_REQUEST['username'];
            } else{
                login_page();
            }
        } elseif($_REQUEST['action'] == 'logout'){
            logout_page();
        }
    } else {
        main_page();
    }
}
catch(Exception $e){
    $error_msg = $e->getMessage();
    require('view/error_view.php');
}