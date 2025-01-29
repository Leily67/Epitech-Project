function hideParagraphs() {
    const paragraphs = document.querySelectorAll('p');
    paragraphs.forEach(p => {
        p.style.display = 'none';
    });
}

document.addEventListener("DOMContentLoaded", function() {
    const firstButton = document.querySelector('button');
    if (firstButton) {
        firstButton.addEventListener('click', hideParagraphs);
    }
});
