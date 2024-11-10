// Активный клас для текущего языка
const langItems = document.querySelectorAll('.trp-language-switcher-container');
const url = window.location

if (url.pathname === '/en/') {
    langItems[1].classList.remove('active')
    langItems[0].classList.add('active');
} else {
    langItems[0].classList.remove('active')
    langItems[1].classList.add('active');
}

