<?php

require_once("model/frontend/4_acct/Manager.php");

class Acct_manager extends Manager{
    public function register_user($username, $email, $password){
        $db = $this->db_connect();
    
        $signup_data = $db->prepare("INSERT INTO users(username, email, password, date_signed_up) VALUES(:username, :email, :password, NOW())");

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $signed_up_user = $signup_data->execute(array(
            'username' => $username,
            'email' => $email,
            'password' => $hashed_password
        ));
    
       return $signed_up_user;
    }

    public function search_user($username){
        $db = $this->db_connect();

        $login_data = $db->prepare("SELECT * FROM users WHERE username = '$username'");
        $login_data->execute();
        $user = $login_data->fetch();
        // print_r($user);

        if(!$user){
            throw new Exception("You entered an incorrect username.<br><i class='fas fa-arrow-right'></i> Please go back to the login page & enter the correct username.<br><br>Or, you haven't registered.<br><i class='fas fa-arrow-right'></i> Please go to the signup page & register your account.");
        } else{
            return $user;
        }  
    }

    public function login_user($username, $password) {
        $user = $this->search_user($username);

        if(!$password){
            return $user;
        } else {
            if(password_verify($password, $user['password'])) {
                if(isset($_POST['remember_login'])){
                    // setting cookie - username UNSAFE?! (when the username is used to login)
                    // name, value, expires, path, domain, secure, httponly
                    setcookie('username', $username, time() + 365*24*3600, null,null,false,true);
                    echo "Cookie '" . $username . "' is set!<br>";
                    return $user;
                } else {
                    echo "Session '" . $username . "' is set!<br>"; 
                    return $user;
                }
            } else {
                throw new Exception("Your password and login information don't match.<br>Please go back to the login page & enter the correct password.");
            }
        }
    }
}