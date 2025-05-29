BX.ready(() => {
    const currentPath = window.location.pathname;

    const menuItems = document.querySelectorAll('.navigation__item')

    menuItems.forEach(item => {
        let itemHref = BX.data(item, 'href') || item.getAttribute('href')

        if (currentPath === itemHref || (itemHref !== '/' && currentPath.startsWith(itemHref))) {
            BX.addClass(item, 'item-active');
        }
    })
})

