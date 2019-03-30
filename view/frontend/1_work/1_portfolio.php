<?php $title='Account'; ?>

<?php ob_start(); ?>

<section>
    <div>
        <p>test</p>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>