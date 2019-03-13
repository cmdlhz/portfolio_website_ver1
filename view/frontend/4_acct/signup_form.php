<form autocomplete="off" id="signup_form" action="index.php?action=access_acct" method="POST">
    <div id="username_div" class="input_container regex">
        <label for="username">Username</label>
        <i class="material-icons input_icon_form">person</i>
        <input class="acct_input" id="username" name="username" type="text" placeholder="Username">
        <p id="username_info" class="acct_form_info">Username must be alphanumeric and contains 3 - 12 characters (case insensitive).</p>
        <p id="username_error"></p>
    </div>
    <div id="email_div" class="input_container regex">
        <label for="email">Email Address</label>
        <i class="material-icons input_icon_form">email</i>
        <input class="acct_input" id="email" name="email" type="text" placeholder="Email">
        <p id="email_error"></p>
    </div>
    <div id="password_div" class="input_container regex">
        <label for="password">Password</label>
        <i class="material-icons input_icon_form">lock</i>
        <input class="acct_input" id="password" name="password" type="password" placeholder="Password" autocomplete="off">
        <p id="password_info" class="acct_form_info">Password must alphanumeric (@, _ , – are also allowed) and be 8–20 characters.</p>
        <p id="password_error"></p>
    </div>
    <div id="pw_conf_div" class="input_container">
        <label for="pw_conf">Password (Confirmation)</label>
        <i class="material-icons input_icon_form">check</i>
        <input class="acct_input" id="pw_conf" name="pw_conf" type="password" placeholder="Password Confirmation" autocomplete="off">
        <p id="pw_conf_error"></p>
    </div>
    <input id="signup_submit_btn" type="submit" value="Sign Up">
</form>