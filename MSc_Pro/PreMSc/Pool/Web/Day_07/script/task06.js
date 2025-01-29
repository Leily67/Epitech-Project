var di;
var tab;
var div;
var flag;
var resX;
var resY;
var diffX;
var diffY;
window.onload = function () {
    // Gère les différents évènement du drag and drop
		tab = document.querySelectorAll(".exercice>footer>div>canvas");
		div = document.querySelectorAll(".exercice>footer>div");
		tab[0].setAttribute("draggable", true);
		tab[0].setAttribute("ondragstart","drag(event)");
		tab[0].setAttribute("id","drag1");
		div[0].setAttribute("ondrop","drop(event)");
        div[0].setAttribute("ondragover","allowDrop(event)");
		div[0].setAttribute("ondragleave", "dropL(event)");
        div[0].setAttribute("ondragenter","dropE(event)");
		tab[0].style.position = "relative";
		di = tab[0].getBoundingClientRect();
		changetext(0,0);
		};
		function allowDrop(ev) {
   			ev.preventDefault();
//   			tab[0].style.zIndex = '1';
		}

        //Initialise une opération de drag and drop, enregistre l'ID de l'élément déplacé
        //et calcule la différence entre la position actuelle de la souris et la position de l'élément
		function drag(ev) {
  		 	ev.dataTransfer.setData("text", ev.target.id);
            var diLive = tab[0].getBoundingClientRect();
			var x = ev.clientX;
            var y = ev.clientY;
            diffX = x - diLive.left;
            diffY = y - diLive.top;
//			tab[0].style.zIndex = "-1";
		}
		function dropL(ev) {
//			tab[0].style.zIndex = '1';
		}
		function dropE(ev) {
//			tab[0].style.zIndex = '-1';
		}

        //gère l'événement de dépôt lors d'une opération de drag and drop
        //déplace l'élément à la position où il a été déposé en ajustant en fonction de la différence initiale
        //et met à jour le texte avec les nouvelles coordonnées
		function drop(ev) {
			ev.preventDefault();
  			var data = ev.dataTransfer.getData("text");
//  		ev.target.appendChild(document.getElementById(data));
//			tab[0].style.zIndex = "1";
      	    var x = ev.clientX;
        	var y = ev.clientY;
			resX =  x - di.left - diffX;
			resY =  y - di.top - diffY;
			tab[0].style.top = resY + "px";
			tab[0].style.left = resX + "px";
			changetext(resX,resY);
		}
		function changetext(x,y) {
			div[1].innerHTML =
          "New coordinates => {x:" + x + "px" + ", y:" + y + "px" +"}";
		}
