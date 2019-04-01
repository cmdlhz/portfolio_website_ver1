<header>
    <ul id="header_left">
        <li>
            <a class="header_link_icon" href="index.php?action=work">
                <i class="header_icon material-icons">work</i>
                <span class="header_word">Work</span>
            </a>
        </li>
        <li>
            <a class="header_link_icon" href="index.php?action=writings">
                <i class="header_icon material-icons">create</i>
                <span class="header_word">Writings</span>
            </a>
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
            <a class="header_link_icon" href="index.php?action=about">
                <i class="header_icon material-icons">cloud</i>
                <span class="header_word">About</span>
            </a>
        </li>
        <li class="dropdown">
            <a href="#" id="dropdown_title" role="button">
                <i class="header_icon material-icons">account_circle</i>
                <span id="show_submenu_word" aria-haspopup="true" aria-expanded="false" class="header_word">Account</span>
            </a>
            <ul id="header_dropdown_content" aria-label="submenu" class="doesnt_show">
                <a href="index.php?action=signup"><li>Sign Up</li></a>
                <a href="index.php?action=login"><li>Log In</li></a>
            </ul>
        </li>
    </ul>
</header>