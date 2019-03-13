<?php $title='Account'; ?>

<?php ob_start(); ?>

<h2 class="title">Welcome, <?= $user['username'] ?> !</h2>

<section class="acct_section">
    <article>
        <div id="acct_div">
            <p>Date Signed Up : <?= $user['date_signed_up'] ?></p>
            <p>My Likes</p>
            <p>Contact Jen Lim</p>
            <p>My Q & A</p>
        </div>
    </article>
    <button id="acct_btn">
        <i class="fas fa-sign-out-alt"></i>
        <a href="index.php?action=logout">Logout</a>
    </button>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('view/template.php') ?>