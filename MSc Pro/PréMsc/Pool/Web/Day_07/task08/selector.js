function Links() {
    const links = document.querySelectorAll('a:not([target="_blank"])');
    links.forEach(link => {
        link.style.opacity = '0.5';
    });
}

document.addEventListener("DOMContentLoaded", function() {
    Links();
});
