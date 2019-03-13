<?php $title='Sign Up'; ?>

<?php ob_start(); ?>

<h2 class="title">Create your account</h2>
<section class="acct_section">
    <article>
        <?php require("view/frontend/4_acct/signup_form.php"); ?>
        <div class="or_divider">
            <span class="or_divider_text">OR</span>
        </div>
        <?php require("view/frontend/4_acct/signup_social_login_btns.php") ?>
    </article>
</section>
<script src="public/js/frontend/4_acct/signup_form.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>
