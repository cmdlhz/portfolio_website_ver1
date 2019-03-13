<?php $title='Account'; ?>

<?php ob_start(); ?>

<?php
    if(isset($username)){
        require("acct_logged.php"); 
    } else {
        throw new Exception("Please enter the correct login information.");
    }
?>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>