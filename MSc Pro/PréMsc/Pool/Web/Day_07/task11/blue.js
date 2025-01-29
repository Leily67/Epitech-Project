document.addEventListener("DOMContentLoaded", function() {
    const paragraphs = document.querySelectorAll('p');

    paragraphs.forEach(p => {
        
        // Met en bleu au passage de la souris
        p.addEventListener('mouseover', function() {
            p.style.color = 'blue';
        });

        p.addEventListener('mouseout', function() {
            p.style.color = '';
        });

        // Met en surbrillance au click
        p.addEventListener('click', function() {
            if (p.style.backgroundColor === 'yellow') {
                p.style.backgroundColor = '';
            } else {
                p.style.backgroundColor = 'yellow';
            }
        });
    });
});
