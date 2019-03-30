<?php $title='Account'; ?>

<?php ob_start(); ?>

<section id="main_section">
    <article id="main_div">
        <h1 id="main_h1">Welcome to JL's webpage!</h1>
        <p id="main_p">This is a test</p>
        <img id="clouds" src="https://images.unsplash.com/photo-1498496294664-d9372eb521f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="clouds">
        <h2 id="main_h2">Table of Content</h2>
        <ul id="main_list">
            <li>1. Back</li>
            <li>2. Elastic</li>
            <li>3. Bounce</li>
            <li>4. RoughEase</li>
            <li>5. SlowMo</li>
            <li>6. SteppedEase</li>
            <li>7. Circ</li>
            <li>8. Expo</li>
            <li>9. Sine</li>
        </ul>
    </article>
</section>
<aside class="aside_buttons">
    <button class="subtitle_buttons">Button 1</button>
    <button class="subtitle_buttons">Button 2</button>
    <button class="subtitle_buttons">Button 3</button>
    <button class="subtitle_buttons">Button 4</button>
    <button class="subtitle_buttons">Button 5</button>
    <button class="subtitle_buttons">Button 6</button>
    <button class="subtitle_buttons">Button 7</button>
</aside>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
<script src="public/js/frontend/5_main_page/main_pg.js"></script>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>