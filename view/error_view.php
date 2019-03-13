<?php $title='Sign Up'; ?>

<?php ob_start(); ?>

<i id="error_page_icon" class="fas fa-exclamation-triangle fa-3x"></i>
<p id="error_msg"><?= $error_msg ?></p>
<?php $content = ob_get_clean(); ?>
<?php require('./view/template.php') ?>