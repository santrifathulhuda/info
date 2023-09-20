const slider = document.querySelector('.slider');

slider.addEventListener('next', () => {
    slider.style.animationPlayState = 'running';
});

