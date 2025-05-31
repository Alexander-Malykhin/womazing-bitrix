document.addEventListener('DOMContentLoaded',() => {
    const sliders = document.querySelectorAll('.banner__header')
    const dots = document.querySelectorAll('.banner__buttons-item')

    const countSlider = sliders.length - 1;
    let count = 0;

    const clearActive = (arr, active) => {
        arr.forEach(item => {
            item.classList.remove(active)
        })
    }

    const initSliders = () => {
        sliders.forEach((slider, index) => {
            slider.style.opacity = '0';
            slider.style.transition = 'opacity 0.5s ease';
            if (index === 0) {
                slider.style.opacity = '1';
                slider.classList.add('banner__active-image');
            }
        });

        if (dots.length > 0) {
            dots[0].classList.add('banner__active');
        }
    };

    const addActive = (arr, active) => {
        arr.forEach((item, index) => {
            if (count === index) item.classList.add(active)
        })
    }

    const updateSlider = () => {
        clearActive(dots, 'banner__active');
        addActive(dots, 'banner__active');
        clearActive(sliders, 'banner__active-image');
        addActive(sliders, 'banner__active-image');
    };


    if (dots) {
        dots.forEach((item, index) => {
            item.addEventListener('click', () => {
                count = index
                updateSlider()
            })
        })
    }

    setInterval(() => {
        count = count >= countSlider ? 0 : count + 1;
        updateSlider()
    }, 3000)
})