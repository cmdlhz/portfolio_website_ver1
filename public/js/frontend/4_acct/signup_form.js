// validation script here
const inputs_regex = document.querySelectorAll(".regex input");
const signup_submit_btn = document.getElementById("signup_submit_btn");
const login_submit_btn = document.getElementById("login_submit_btn");

const regex_patterns = {
    // \d : matches any digit character (same as [0–9])
    // /i : case insensitive
    username: /^[a-z\d]{3,12}$/i,
    // \w : matches any word character (a-z, A-Z, 0–9, and _)
    // @- matches a single character in the list @- (case sensitive)
    password: /^[\w@-]{8,20}$/,
    // \. matches the character . literally (case sensitive)
    // - matches the character - literally (case sensitive)
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
};

const inputs_list = [
    {
        "element" : document.getElementById('username'),
        "method" : username_check,
        "event" : "keyup"
    },
    {
        "element" : document.getElementById('email'),
        "method" : email_check,
        "event" : "keyup"
    },
    {
        "element" : document.getElementById('password'),
        "method" : password_check,
        "event" : "keyup"
    },
    {
        "element" : document.getElementById('pw_conf'),
        "method" : pw_validation_test,
        "event" : "keyup"
    }
];

// [Part 1] Regex Check
function validate(field, regex){
    // The test() method returns true if it finds a match, otherwise it returns false.
    // field.value = what a user enters in the input
    var result = false; // boolean result of the regex
    if(result = regex.test(field.value)){
        field.classList.remove("invalid");
    } else {
        field.classList.add("invalid");
    }
    return result ;
}

function username_check(){
    var username = document.getElementById('username');
    var username_info = username.nextElementSibling;
    var username_error = username_info.nextElementSibling;

    if(username.classList.contains('invalid')){
        username_info.classList.add('hidden');
        username_error.textContent = "[!] Username must be alphanumeric and contains 3 - 12 characters (case insensitive).";    
        username_error.classList.add('comment_invalid');
    } else{
        username_info.classList.remove('hidden');
        username_error.textContent = "";    
        username_error.classList.remove('comment_invalid');   
    }
}

function email_check(){
    var email = document.getElementById('email');
    var email_error = email.nextElementSibling;

    if(email.classList.contains('invalid')){
        email_error.textContent = "[!] Please enter a valid email address.";    
        email_error.classList.add('comment_invalid');
    } else{
        email_error.textContent = "";    
        email_error.classList.remove('comment_invalid');
    }
}

function password_check(){
    var password = document.getElementById('password');
    var password_info = password.nextElementSibling;
    var password_error = password_info.nextElementSibling;

    if(password.classList.contains('invalid')){
        password_info.classList.add('hidden');
        password_error.textContent = "[!] Password must be alphanumeric and contains 8 - 20 characters.";    
        password_error.classList.add('comment_invalid');
    } else{
        password_info.classList.remove('hidden');
        password_error.textContent = "";    
        password_error.classList.remove('comment_invalid');
    }
}

// [Part 2] Password Confirmation
function pw_validation_test(){
    var password = document.getElementById('password');
    var pw_conf = document.getElementById('pw_conf'); 
    var pw_conf_error = pw_conf.nextElementSibling;
    
    if(password.value !== pw_conf.value){
        password.classList.add('invalid');
        pw_conf.classList.add('invalid');
        pw_conf_error.classList.add('comment_invalid');
        pw_conf_error.textContent = "[!] Your passwords don't match.";
    } else{
        password.classList.remove('invalid');
        password_error.classList.remove('comment_invalid');
        password_error.textContent = ""; 
        pw_conf.classList.remove('invalid');
        pw_conf_error.classList.remove('comment_invalid');
        pw_conf_error.textContent = "";          
    }
}

/*
    Create a function with only event listeners
    To this function you privide an array of elements and the type of the event
*/
function set_event_listeners(inputs) {
    for (var index in inputs) {
        // console.log('inputs[index]', inputs[index]);
        inputs[index].element.addEventListener(inputs[index].event, inputs[index].method);
    }
}

function signup_complete_check(inputs){
    signup_submit_btn.addEventListener("click", function(e){
        console.log(inputs);
        inputs.forEach(function(item){
            var check_complete = item.element.classList.contains("invalid");
            // console.log('item.element.value', item.element.value);
            // console.log('check_complete', check_complete);
            if(item.element.value === '' || check_complete === true){
                e.preventDefault();
            }
        });
    });
}

/*
    EXECUTION OF THE SCRIPT
*/
inputs_regex.forEach((input) => {
    input.addEventListener('keyup',(e) => {
        // console.log('e.target.value : ', e.target.value);
        // console.log('regex_patterns : ', regex_patterns[e.target.attributes.name.value]);
        validate(e.target, regex_patterns[e.target.attributes.name.value]);
    })
});

set_event_listeners(inputs_list);
signup_complete_check(inputs_list);