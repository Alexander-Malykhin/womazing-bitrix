document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.banner__header');
    const dots = document.querySelectorAll('.banner__buttons-item');
    const countSlider = sliders.length - 1;
    let count = 0;
    let sliderInterval;

    const clearActive = (arr, active) => {
        arr.forEach(item => {
            item.classList.remove(active);
        });
    };

    const addActive = (arr, active) => {
        arr.forEach((item, index) => {
            if (count === index) item.classList.add(active);
        });
    };

    const updateSlider = () => {
        clearActive(dots, 'banner__active');
        addActive(dots, 'banner__active');

        sliders.forEach((slider, index) => {
            slider.classList.remove('banner__active-image');
            if (index === count) {
                slider.classList.add('banner__active-image');
            }
        });
    };

    const startSlider = () => {
        sliderInterval = setInterval(() => {
            count = count >= countSlider ? 0 : count + 1;
            updateSlider();
        }, 3000);
    };

    if (dots.length > 0) {
        dots.forEach((item, index) => {
            item.addEventListener('click', () => {
                clearInterval(sliderInterval);
                count = index;
                updateSlider();
                startSlider();
            });
        });
    }

    // Инициализация слайдера
    updateSlider();
    startSlider();
});