export class Morpion {
    constructor(gridElement, scoreXElement, scoreOElement) {
        this.gridElement = gridElement;
        this.scoreXElement = scoreXElement;
        this.scoreOElement = scoreOElement;
        this.grid = Array(3).fill().map(() => Array(3).fill(null));
        this.currentPlayer = 'X';
        this.gameOver = false;
        this.scoreX = 0;
        this.scoreO = 0;
        this.init();
    }

    init() {
        this.gridElement.innerHTML = '';
        this.gridElement.classList.remove('won');
        this.grid = Array(3).fill().map(() => Array(3).fill(null));
        this.currentPlayer = 'X';
        this.gameOver = false;

        for (let i = 0; i < 3; i++) {
            for (let j = 0; j < 3; j++) {
                const cell = document.createElement('div');
                cell.classList.add('cell');
                cell.dataset.row = i;
                cell.dataset.col = j;
                cell.addEventListener('click', () => this.handleCellClick(i, j));
                this.gridElement.appendChild(cell);
            }
        }
    }

    handleCellClick(row, col) {
        if (this.gameOver || this.grid[row][col] !== null) return;

        this.grid[row][col] = this.currentPlayer;
        this.render();

        if (this.checkWin()) {
            this.gameOver = true;
            this.gridElement.classList.add('won');
            alert(`Le joueur ${this.currentPlayer} a gagné !`);
            this.updateScore();
        } else if (this.checkDraw()) {
            this.gameOver = true;
            alert('Match nul !');
        } else {
            this.currentPlayer = this.currentPlayer === 'X' ? 'O' : 'X';
        }
    }

    render() {
        this.gridElement.querySelectorAll('.cell').forEach(cell => {
            const row = cell.dataset.row;
            const col = cell.dataset.col;
            cell.textContent = this.grid[row][col];
            cell.setAttribute('data-value', this.grid[row][col]);
        });
    }

    checkWin() {
        // Vérification des lignes
        for (let i = 0; i < 3; i++) {
            if (this.grid[i][0] !== null && this.grid[i][0] === this.grid[i][1] && this.grid[i][1] === this.grid[i][2]) {
                return true;
            }
        }

        // Vérification des colonnes
        for (let j = 0; j < 3; j++) {
            if (this.grid[0][j] !== null && this.grid[0][j] === this.grid[1][j] && this.grid[1][j] === this.grid[2][j]) {
                return true;
            }
        }

        // Vérification des diagonales
        if (this.grid[0][0] !== null && this.grid[0][0] === this.grid[1][1] && this.grid[1][1] === this.grid[2][2]) {
            return true;
        }

        if (this.grid[0][2] !== null && this.grid[0][2] === this.grid[1][1] && this.grid[1][1] === this.grid[2][0]) {
            return true;
        }

        return false;
    }

    checkDraw() {
        return this.grid.flat().every(cell => cell !== null);
    }

    updateScore() {
        if (this.currentPlayer === 'X') {
            this.scoreX++;
            this.scoreXElement.textContent = this.scoreX;
        } else {
            this.scoreO++;
            this.scoreOElement.textContent = this.scoreO;
        }
    }
}
