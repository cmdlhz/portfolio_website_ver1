<?php $title='Sign Up'; ?>

<?php ob_start(); ?>

<h2 class="title">Create your account</h2>
<section class="acct_section">
    <article>
        <p class="access_switch">Already have an acct? Please <a href="index.php?action=login">log in</a>.</p>
        <?php require("view/frontend/4_acct/signup_social_login_btns.php") ?>
        <div id="or_divider_signup">
            <span class="or_divider_text">OR</span>
        </div>
        <?php require("view/frontend/4_acct/signup_form.php"); ?>
    </article>
</section>
<script src="public/js/frontend/4_acct/signup_form.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>
