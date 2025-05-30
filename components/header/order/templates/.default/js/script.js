document.addEventListener('DOMContentLoaded', () => {
    const buttonOrder = document.querySelector('.phone__button');
    const orderFormHeader = document.querySelector('.header__order')
    const orderButtonClose = document.querySelector('.header__order-close')
    buttonOrder.addEventListener('click', () => {
        return orderFormHeader.classList.add('header__order-active')
    })

    orderButtonClose.addEventListener('click', () => {
        return orderFormHeader.classList.remove('header__order-active')
    })
})