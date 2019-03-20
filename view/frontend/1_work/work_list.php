<?php $title='Account'; ?>

<?php ob_start(); ?>

<section class="work_section">
    <article>
        <i class="fab fa-html5"></i>
        <i class="fab fa-css3-alt"></i>
        <i class="fab fa-js-square"></i>
        <i class="fab fa-php"></i>
        <i class="fas fa-database"></i>
        <i class="fab fa-sass"></i>
        <p>scroll magic</p>
        <p>greensock</p>
        <br>
        <i class="fab fa-vuejs"></i>
        <i class="fab fa-python"></i>
        
    </article>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>