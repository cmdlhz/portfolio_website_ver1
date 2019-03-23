<?php $title='Account'; ?>

<?php ob_start(); ?>

<h2 class="title">Writings</h2>
<section class="writings_section">
    <article>
        <div id="writings_categories">categories</div>
        <div id="writings_content">writing 1</div>
    </article>
    <script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#0b82dc', 'Q5Q1SFAC');kofiwidget2.draw();</script> 
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>