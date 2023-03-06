document.addEventListener('DOMContentLoaded', function() {
    const burgerButtons = document.getElementsByClassName('burger-menu-toggler');
    for (let i = 0; i < burgerButtons.length; i++) {
        const element = burgerButtons[i];
        burgerButtons[i].addEventListener('click', function() {
            document.body.classList.toggle('burger-menu-active')
        })
    }
} );