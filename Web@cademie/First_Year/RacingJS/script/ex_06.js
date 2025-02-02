const div = document.querySelector('footer div');

let Hero = function (name, genre, intel, straight) {
    this.name = name;
    this.genre = genre;
    this.intel = intel;
    this.straight = straight;
    Hero.prototype.toString = function () {
        let str = "Je suis " + this.name + " le " + this.genre + ", j'ai " + this.intel;
        this.intel > 1 ? str += " points d'intelligence et " + this.straight : str += " point d'intelligence et " + this.straight;
        this.straight > 1 ? str += " points de force !</br>" : str += " point de force !</br>";
        div.innerHTML += str;
    }
}

var mage = new Hero("amadeus", "mage", 10, 3);
var guerrier = new Hero("pontius", "guerrier", 3, 10);
mage.toString();
guerrier.toString();