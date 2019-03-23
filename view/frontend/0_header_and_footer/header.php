<header>
    <ul id="header_left">
        <li>
            <a class="header_link_icon" href="index.php?action=work"><i class="header_icon material-icons">work</i></a>
            <a class="header_word_left" href="index.php?action=work">Work</a>
            <!-- <a class="header_link_icon" href="index.php?action=work">
                <i class="header_icon material-icons">work</i>
                <span>Work</span>
            </a> -->
        </li>
        <li>
            <a class="header_link_icon" href="index.php?action=writings"><i class="header_icon material-icons">create</i></a>
            <a class="header_word_left" href="index.php?action=writings">Writings</a>
        </li>
    </ul>
    <ul id="header_middle">
        <a href="index.php?action=main_page">
            <canvas id="canvas_logo" width="49" height="49">
                <p>Logo</p>
            </canvas>
        </a>
    </ul>
    <ul id="header_right">
        <li>
            <a class="header_link_icon" href="index.php?action=about"><i class="header_icon material-icons">cloud</i></a>
            <a class="header_word_right" href="index.php?action=about">About</a>
        </li>
        <li class="dropdown">
            <div id="dropdown_title">
                <i class="header_icon material-icons">account_circle</i>
                <a class="header_word_right" id="show_submenu_word" aria-haspopup="true" aria-expanded="false">Account</a>
            </div>
            <ul id="header_dropdown_content" aria-label="submenu" class="doesnt_show">
                <a href="index.php?action=signup"><li>Sign Up</li></a>
                <a href="index.php?action=login"><li>Log In</li></a>
            </ul>
        </li>
    </ul>
</header>