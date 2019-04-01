<?php $title='Account'; ?>

<?php ob_start(); ?>

<h2 class="title"><a href="index.php?action=about_personality">Personality</a> / <a href="index.php?action=about_interests">Interests</a></h2>
<section>
    <section class="section_test">
        <div class="grid_test">
            <h1 class="h1_test">StrengthsQuest!</h1>
            <p>scroll down</p>
        </div>
    </section>
    <section class="section_test">
        <div class="project_div project_left">
            <div class="box_test">
                <img class="img_test" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80" alt="korea">
                <div class="overlay_test_left"></div>
            </div>
            <div class="project_info">
                <p class="small_title">Identity // Website // Print</p>
                <h4 class="h4_test">This is the first project</h4>
                <a href="" class="project_link">See case study</a>
            </div>
        </div>
        <div class="project_div project_right">
            <div class="box_test">
                <img class="img_test" src="https://images.unsplash.com/photo-1553696801-25638feb93fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="korea">
                <div class="overlay_test_right"></div>
            </div>
            <div class="project_info">
                <p class="small_title">Identity // Website // Print</p>
                <h4 class="h4_test">This is the second project</h4>
                <a href="" class="project_link">See case study</a>
            </div>
        </div>
        <div class="project_div project_left">
            <div class="box_test">
                <img class="img_test" src="https://images.unsplash.com/photo-1553714191-c89281730c67?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="korea">
                <div class="overlay_test_left"></div>
            </div>
            <div class="project_info">
                <p class="small_title">Identity // Website // Print</p>
                <h4 class="h4_test">This is the third project</h4>
                <a href="" class="project_link">See case study</a>
            </div>
        </div>
    </section>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
<script src="public/js/frontend/3_about/personality.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>