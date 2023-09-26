import './bootstrap';

const _nav_button = document.querySelector('#navbarSupportedContentButton');
const _nav = document.querySelector('#navbarSupportedContent');

_nav_button.addEventListener('click', function(){
    _nav.classList.toggle("nav-active");
})