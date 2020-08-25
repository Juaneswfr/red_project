const menuButton = document.getElementById('div-menu');
const menu = document.getElementById('menu');
const menuPrincipal = document.getElementById('logo-principal');
const submenu_alpha = document.getElementById('submenu_alpha');
const submenu_a = document.getElementById('submenu_a');
const user = document.getElementById('user');
const user_menu = document.getElementById('user_menu');



menuPrincipal.addEventListener('click', function () {
    menu.classList.toggle('hidden_lateral_menu');
    menu.classList.toggle('lateral_menu');
    menu.classList.remove('hidden_all');

})

menuButton.addEventListener('click', function () {
    menu.classList.toggle('hidden_lateral_menu');
    menu.classList.toggle('lateral_menu');
    menu.classList.remove('hidden_all');

})

submenu_alpha.addEventListener('click', function () {
    submenu_a.classList.toggle('hidden');
    submenu_a.classList.toggle('sub-menu');
})

user.addEventListener('click', function () {
    user_menu.classList.remove('hidden_all');
    user_menu.classList.toggle('hidden_user_menu');
    user_menu.classList.toggle('user_menu');
    
})






;