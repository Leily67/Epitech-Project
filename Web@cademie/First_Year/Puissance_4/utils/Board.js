export class Board {
    constructor(rows = 6, cols = 7) {
        this.rows = rows;
        this.cols = cols;
        this.grid = Array.from({ length: rows }, () => Array(cols).fill(null));
    }

    isColumnFull(col) {
        return this.grid[0][col] !== null;
    }

    placeToken(col, playerId) {
        for (let row = this.rows - 1; row >= 0; row--) {
            if (this.grid[row][col] === null) {
                this.grid[row][col] = playerId;
                return { row, col };
            }
        }
        return null;
    }

    reset() {
        this.grid = Array.from({ length: this.rows }, () => Array(this.cols).fill(null));
    }
}
