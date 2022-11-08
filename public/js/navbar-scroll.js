window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navigation").classList.add('nav-scrolled');
        document.getElementById("navigation").classList.remove('nav-initial');
        // document.getElementsByClassName("nav-item-text").classList.add('nav-item-text-black');
        // document.getElementById("nav-item-text").classList.remove(' md:text-neutral-200');
    } else {
        document.getElementById("navigation").classList.add('nav-initial');
        document.getElementById("navigation").classList.remove('nav-scrolled');
        // document.getElementsByClassName("nav-item-text").classList.remove('text-black');
        // document.getElementById("nav-item-text").classList.add(' md:text-neutral-200');
    }
}