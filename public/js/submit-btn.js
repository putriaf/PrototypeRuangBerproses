(() => {
    const button = document.getElementById('continue-btn');
    const loading = document.querySelector('u-loading');
    const tick = document.querySelector('u-success');

    const setFinished = () => {
        button.classList.remove('c-btn__loading');
        button.classList.add('c-btn__finished');
    }

    const clickButton = (e) => {
        console.log('clicked');
        if (button.className.indexOf('loading') >= 0) {
            button.classList.remove('c-btn__loading');
            button.classList.remove('c-btn__finished');
        } else {
            button.classList.add('c-btn__loading');
            setTimeout(setFinished, 2000);
        }

    }

    button.addEventListener('click', e => clickButton(e));

})();