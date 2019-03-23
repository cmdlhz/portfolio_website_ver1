<?php $title='Account'; ?>

<?php ob_start(); ?>

<section class="acct_section">
    <p>Welcome!</p>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>