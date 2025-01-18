document.getElementById('fileInput').addEventListener('change', function () {
    const fileList = document.getElementById('fileList');
    fileList.innerHTML = '';
    Array.from(this.files).forEach(file => {
        const li = document.createElement('li');
        li.textContent = file.name;
        fileList.appendChild(li);
    });
});

document.getElementById('generateArchive').addEventListener('click', function () {
    const archiveName = document.getElementById('archiveName').value.trim();
    if (!archiveName) {
        alert('Please enter an archive name.');
        return;
    }

    alert('Archive creation logic here.');
});
