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
    </article>
    <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#0b82dc', 'Q5Q1SFAC');kofiwidget2.draw();</script> 
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>