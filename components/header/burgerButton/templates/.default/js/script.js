document.addEventListener('DOMContentLoaded', () => {

    const burger = document.querySelector('.burger')
    const menu = document.querySelector('.mobile__menu')
    const mobileButton = document.querySelector('.mobile__button')
    const backgorund = document.querySelector('.mobile__background')

    burger.addEventListener('click', () => {
        document.body.style.overflow = 'hidden';
        menu.classList.add('mobile-active')
    })

    const removeAddActive = () => {
        document.body.style.overflow = '';
        menu.classList.remove('mobile-active')
    }

    mobileButton.addEventListener('click', removeAddActive)
    backgorund.addEventListener('click', removeAddActive)
})