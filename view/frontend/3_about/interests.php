<?php $title='Account'; ?>

<?php ob_start(); ?>

<h2 class="title"><a href="index.php?action=about_personality">Personality</a> / <a href="index.php?action=about_interests">Interests</a></h2>
<section>
    <article id="chinese">
        <div>chinese</div>
        <i class="material-icons">feedback</i>
        <i class="material-icons-outlined">feedback</i>
        <i class="material-icons-two-tone">feedback</i>
        <i class="material-icons-round">feedback</i>
        <i class="material-icons-sharp">feedback</i>
    </article>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>