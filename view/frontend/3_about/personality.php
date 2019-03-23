<?php $title='Account'; ?>

<?php ob_start(); ?>

<h2 class="title"><a href="index.php?action=about_personality">Personality</a> / <a href="index.php?action=about_interests">Interests</a></h2>
<section>
    <article id="strengthsQuest">
        <div>strengthsQuest</div>
    </article>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>