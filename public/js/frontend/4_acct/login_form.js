// Const
const inputs_regex = document.querySelectorAll(".regex input");
const login_submit_btn = document.getElementById("login_submit_btn");

const inputs_list = [
    {
        "element" : document.getElementById('username'),
        "event" : "keyup"
    },
    {
        "element" : document.getElementById('password'),
        "event" : "keyup"
    }
];

// Event Listners
function set_event_listeners(inputs) {
    for (var index in inputs) {
        inputs[index].element.addEventListener(inputs[index].event, inputs[index].method);
    }
}

function login_complete_check(inputs){
    login_submit_btn.addEventListener("click", function(e){
        var test = true;
        inputs.forEach(function(item){
            if(item.element.value == '') {
                test = false;
            }
        });

        if(test) {
            document.getElementById('login_form').submit();
        } else {
            e.preventDefault();
        }
        
    });
}

// Execution of Scripts
login_complete_check(inputs_list);