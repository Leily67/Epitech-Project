const div = document.querySelector('footer div');
const canvas = document.getElementsById = "canvas";
var ctx = canvas.getContext('2d');



ctx.fillStyle = 'orange';
ctx.fillRect(0, 0, 25, 5);
ctx.fill();
ctx.fillStyle = 'purple';
ctx.fillRect(25, 0, 25, 5);
ctx.fill();
ctx.fillStyle = 'noir';
ctx.fillRect(25, 0, 25, 5);
ctx.fill();
ctx.fillStyle = 'olive';
ctx.fillRect(25, 0, 25, 5);
ctx.fill();

div.innerHTML = canvas;
