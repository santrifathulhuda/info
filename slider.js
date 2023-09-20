const slider = document.querySelector('.slider');

slider.addEventListener('next', () => {
    slider.style.animationPlayState = 'paused';
});

slider.addEventListener('next', () => {
    slider.style.animationPlayState = 'running';
});
