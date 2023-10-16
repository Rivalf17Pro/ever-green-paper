import './bootstrap';
import '../fontawesome-free-6.4.2-web/js/all.min';

const _nav_button = document.querySelector('#navbarSupportedContentButton');
const _nav = document.querySelector('#navbarSupportedContent');

_nav_button.addEventListener('click', function(){
    _nav.classList.toggle("nav-active");
})