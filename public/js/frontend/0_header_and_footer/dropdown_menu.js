var show_submenu = document.querySelector('#show_submenu');
var header_dropdown_content = document.getElementById('header_dropdown_content');

show_submenu.onclick = function(){
    console.log('hi');
    header_dropdown_content.classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e){
    if(!e.target.matches('#show_submenu')){
        if(header_dropdown_content.classList.contains('show')){
            header_dropdown_content.classList.remove('show');
        }
    }
}

// https://css-tricks.com/controlling-css-animations-transitions-javascript/