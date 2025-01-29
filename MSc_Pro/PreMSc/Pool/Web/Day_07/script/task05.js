(function (){
    window.onload = function() {
        //Récupère le premier élément de la page et créer un nouvel objet audio
        var canvas = document.getElementsByTagName('canvas')[0];
        var audio =  new Audio("https://cdn.alexishenry.eu/shared/videos/music.mp3");

        //Récupère tous les éléments bouton de la page
        var button = document.getElementsByTagName('button');

        //Dessin du canva(couleur, taille, forme etc ...)
        var draw = canvas.getContext('2d');
        draw.strokeStyle = "#fff";
        canvas.width = "20";
        canvas.height = "20";
        draw.lineWidth=1;
        draw.beginPath();
        draw.moveTo(6,6);
        draw.lineTo(14,10);
        draw.lineTo(6,14);
        draw.lineTo(6,6);
        draw.fillStyle = "#fff";
        draw.fill();
        draw.stroke();

        //joue l'audio
        canvas.onclick = function(){
            audio.play();
        };

        //met en pause l'audio
        button[0].onclick = function(){
            audio.pause();
        };

        //Met en arret l'audio
        button[1].onclick = function(){
            audio.pause();
            audio.currentTime = 0;
        };

        //mute l'audio ou le demute
        button[2].onclick = function() {
            if(audio.muted != true) {
                    audio.muted = true;
            }
            else {
                audio.muted = false;
            }
        }
    };
})()
