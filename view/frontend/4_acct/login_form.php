<form autocomplete="off" id="login_form" action="index.php?action=logged" method="POST">
    <div id="username_div" class="input_container regex">
        <label for="username">Username</label>
        <span id="forgot_username">
            <a href="social_acct.php">Forgot username</a>
            <i class="fas fa-question"></i>
        </span>
        <i class="material-icons input_icon_form">person</i>
        <input class="acct_input" id="username" name="username" type="text" placeholder="Your username">
    </div>
    <div id="password_div" class="input_container regex">
        <label for="password">Password</label>
        <span id="forgot_pw">
            <a href="social_acct.php">Forgot password</a>
            <i class="fas fa-question"></i>
        </span>
        <i class="material-icons input_icon_form">lock</i>
        <input class="acct_input" id="password" name="password" type="password" placeholder="Your Password" autocomplete="off">
    </div>
    <div>
        <label for="remember_login" id="remember_login_label">
            <input id="remember_login" name="remember_login" type="checkbox"> 
            <span>Remember Me</span>
        </label>
    </div>
    <input id="login_submit_btn" type="submit" value="Log In">
</form>