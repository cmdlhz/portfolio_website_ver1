<header>
    <ul id="header_left">
        <li>
            <i class="material-icons">work</i>
            <a href="index.php?action=work">Work</a>
        </li>
        <li>
            <i class="material-icons">create</i>
            <a href="index.php?action=login">Writings</a>
        </li>
    </ul>
    <ul id="header_middle">
        <canvas id="canvas_logo" width="49" height="49">
            <p>Logo</p>
        </canvas>
    </ul>
    <ul id="header_right">
        <li class="dropdown">
            <i class="material-icons">cloud</i>
            <a href="index.php?action=signup">About</a>
        </li>
        <li class="dropdown">
            <i class="material-icons">account_circle</i>
            <!-- Accessible Rich Internet Applications (ARIA) is a set of attributes that define ways to make web content and web applications (especially those developed with JavaScript) more accessible to people with disabilities. -->
            <a id="show_submenu" aria-haspopup="true">Account</a>
            <ul id="header_dropdown_content" aria-label="submenu">
                <li>
                    <a href="index.php?action=signup">Sign Up</a>
                </li>
                <li>
                    <a href="index.php?action=login">Log In</a>
                </li>
            </ul>
        </li>
    </ul>
</header>