(() => {
    const button = document.getElementById('submit-btn');
    const svg_loading = document.getElementById('loading-svg');

    const clickButton = (e) => {
        if(document.getElementById("email").value.length == 0 || document.getElementById("password").value.length == 0) {
        } else {
            svg_loading.classList.remove('hidden');
            svg_loading.classList.add('block');
            setTimeout(2000);
        }
    }

    button.addEventListener('click', e => clickButton(e));

})();