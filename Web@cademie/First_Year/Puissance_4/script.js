import { Game } from './utils/Game.js';

const game = new Game();
const boardElement = document.getElementById('board');
const turnIndicator = document.getElementById('turn-indicator');
const resetButton = document.getElementById('reset-button');

function renderBoard() {
    boardElement.innerHTML = '';
    for (let row = 0; row < game.board.rows; row++) {
        for (let col = 0; col < game.board.cols; col++) {
            const cell = document.createElement('div');
            cell.className = 'cell';
            const cellValue = game.board.grid[row][col];
            if (cellValue === 1) cell.classList.add('red');
            if (cellValue === 2) cell.classList.add('yellow');
            cell.addEventListener('click', () => handleClick(col));
            boardElement.appendChild(cell);
        }
    }
}

function handleClick(col) {
    if (game.winner || game.board.isColumnFull(col)) return;

    const { row } = game.board.placeToken(col, game.currentPlayer.id);
    renderBoard();

    if (game.checkWin(row, col)) {
        game.winner = game.currentPlayer;
        alert(`${game.currentPlayer.color} wins!`);
        return;
    }

    game.switchPlayer();
    turnIndicator.textContent = `C'est le tour de ${game.currentPlayer.color}`;
}

resetButton.addEventListener('click', () => {
    game.resetGame();
    renderBoard();
    turnIndicator.textContent = `C'est le tour de ${game.currentPlayer.color}`;
});

renderBoard();
turnIndicator.textContent = `C'est le tour de ${game.currentPlayer.color}`;
