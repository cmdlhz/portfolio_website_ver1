<?php $title='Log In'; ?>

<?php ob_start(); ?>

<?php
if($_REQUEST['action'] == 'after_signup'){
?>
    <h2 class="title">Thanks for signing up!<br>Please log into your account.</h2>
<?php
}
?>
<?php
if($_REQUEST['action'] == 'login'){
?>
    <h2 class="title">Log In Your Account</h2>
<?php
}
?>
<?php
if($_REQUEST['action'] == 'logged'){
?>
    <h2 class="title">Your session/cookie has expired. Please log in again.</h2>
<?php
}
?>

<section class="acct_section">
    <article>
        <?php require("login_form.php"); ?>
        <div class="or_divider">
            <span class="or_divider_text">OR</span>
        </div>
        <?php require("login_social_login_btns.php") ?>
    </article>
</section>
<script src="public/js/frontend/4_acct/login_form.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>