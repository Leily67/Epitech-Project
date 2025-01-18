import { Player } from './Player.js';
import { Board } from './Board.js';

export class Game {
    constructor(rows = 6, cols = 7, colors = { red: 'red', yellow: 'yellow' }) {
        this.board = new Board(rows, cols);
        this.players = [
            new Player(1, colors.red),
            new Player(2, colors.yellow),
        ];
        this.currentPlayer = this.players[0];
        this.winner = null;
    }

    switchPlayer() {
        this.currentPlayer = this.currentPlayer === this.players[0] ? this.players[1] : this.players[0];
    }

    checkWin(row, col) {
        const directions = [
            { x: 0, y: 1 }, // Horizontal
            { x: 1, y: 0 }, // Vertical
            { x: 1, y: 1 }, // Diagonal \
            { x: 1, y: -1 }, // Diagonal /
        ];

        for (const { x, y } of directions) {
            let count = 1;
            count += this.countTokens(row, col, x, y);
            count += this.countTokens(row, col, -x, -y);
            if (count >= 4) return true;
        }

        return false;
    }

    countTokens(row, col, x, y) {
        const playerId = this.board.grid[row][col];
        let count = 0;
        let r = row + x;
        let c = col + y;

        while (r >= 0 && r < this.board.rows && c >= 0 && c < this.board.cols && this.board.grid[r][c] === playerId) {
            count++;
            r += x;
            c += y;
        }

        return count;
    }

    resetGame() {
        this.board.reset();
        this.winner = null;
        this.currentPlayer = this.players[0];
    }
}
