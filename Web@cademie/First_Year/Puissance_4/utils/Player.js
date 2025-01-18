export class Player {
    constructor(id, color) {
        this.id = id;
        this.color = color;
        this.score = 0;
    }

    incrementScore() {
        this.score += 1;
    }
}
