const menuButton = document.getElementById('div-menu');
const menu = document.getElementById('menu');
const menuPrincipal = document.getElementById('logo-principal');



menuPrincipal.addEventListener('click', function () {
    menu.classList.toggle('menu');
    menu.classList.toggle('ocultar');
    menuButton.classList.toggle('logo-menu');
    menuButton.classList.toggle('logo-menu-ocultar');
})

menuButton.addEventListener('click', function () {
    menu.classList.toggle('menu');
    menu.classList.toggle('ocultar');
    menuButton.classList.toggle('logo-menu');
    menuButton.classList.toggle('logo-menu-ocultar');

});