<?php $title='Log Out'; 

if(isset($_SESSION['username'])){
    session_destroy();
    echo "Session '" . $_SESSION['username']. "' has been deleted!<br>";
} 

if(isset($_COOKIE['username'])){
    setcookie("username", "", time() - 365*24*3600);
    echo "Cookie '" . $_COOKIE['username']. "' has been deleted!<br>";
} 

ob_start(); ?>

<h2 class="title">You have been logged out. Please log in again.</h2>

<section class="acct_section">
    <article>
        <?php require("login_form.php"); ?>
        <div id="or_divider_login">
            <span class="or_divider_text">OR</span>
        </div>
        <?php require("login_social_login_btns.php") ?>
    </article>
</section>
<script src="public/js/frontend/4_acct/login_form.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>