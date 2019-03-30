var show_submenu = document.querySelector('#dropdown_title');
var show_submenu_word = document.querySelector('#show_submenu_word');
var header_dropdown_content = document.getElementById('header_dropdown_content');

show_submenu.onclick = function(){
    if(header_dropdown_content.classList.contains('show')){
        header_dropdown_content.classList.remove('show');
        header_dropdown_content.classList.add('doesnt_show');
        show_submenu_word.setAttribute("aria-expanded", false);
    } else{
        header_dropdown_content.classList.add('show');
        header_dropdown_content.classList.remove('doesnt_show');
        show_submenu_word.setAttribute("aria-expanded", true);
    }
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e){
    if(!e.target.matches('#show_submenu_word')){
        if(header_dropdown_content.classList.contains('show')){
            header_dropdown_content.classList.remove('show');
            header_dropdown_content.classList.add('doesnt_show');
            show_submenu_word.setAttribute("aria-expanded", false);
        } 
    }
}

// https://css-tricks.com/controlling-css-animations-transitions-javascript/

// var show_submenu = document.querySelector('#dropdown_title');
// var header_dropdown_content = document.getElementById('header_dropdown_content');

// show_submenu.onclick = function(){
//     if(header_dropdown_content.classList.contains('show')){
//         header_dropdown_content.classList.remove('show');
//         header_dropdown_content.classList.add('doesnt_show');
//         show_submenu.setAttribute("aria-expanded", false);
//     } else{
//         header_dropdown_content.classList.add('show');
//         header_dropdown_content.classList.remove('doesnt_show');
//         show_submenu.setAttribute("aria-expanded", true);
//     }
// }

// // Close the dropdown if the user clicks outside of it
// window.onclick = function(e){
//     if(!e.target.matches('#show_submenu')){
//         if(header_dropdown_content.classList.contains('show')){
//             header_dropdown_content.classList.remove('show');
//             header_dropdown_content.classList.add('doesnt_show');
//             show_submenu.setAttribute("aria-expanded", false);
//         } 
//     }
// }