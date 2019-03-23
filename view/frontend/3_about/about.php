<?php $title='Account'; ?>

<?php ob_start(); ?>

<h2 class="title"><a href="index.php?action=about_personality">Personality</a> / <a href="index.php?action=about_interests">Interests</a></h2>
<section class="about_section">
    <article id="about_me">
        <div>about_me</div>
    </article>
    <article id="about_website">
        <div>about_website</div>
    </article>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>