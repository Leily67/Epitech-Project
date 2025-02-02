const playerInfo = document.getElementById("player-info");
const aiInfo = document.getElementById("ai-info");
const attackButton = document.getElementById("attack-button");

async function fetchRandomPokemon() {
    const response = await fetch("https://pokeapi.co/api/v2/pokemon/");
    const data = await response.json();
    const randomPokemon = data.results[Math.floor(Math.random() * data.results.length)];

    const pokemonDetailsResponse = await fetch(randomPokemon.url);
    const pokemonDetails = await pokemonDetailsResponse.json();

    return {
        name: pokemonDetails.name,
        hp: pokemonDetails.stats[0].base_stat,
        attack: pokemonDetails.stats[1].base_stat
    };
}

async function startBattle() {
    const playerPokemon = await fetchRandomPokemon();
    const aiPokemon = await fetchRandomPokemon();

    updateInfo(playerPokemon, aiPokemon);

    attackButton.addEventListener("click", () => {
        const playerDamage = Math.floor(Math.random() * playerPokemon.attack);
        const aiDamage = Math.floor(Math.random() * aiPokemon.attack);

        aiPokemon.hp -= playerDamage;
        playerPokemon.hp -= aiDamage;

        if (playerPokemon.hp <= 0) {
            playerPokemon.hp = 0;
            alert("You lost!");
        }
        if (aiPokemon.hp <= 0) {
            aiPokemon.hp = 0;
            alert("You win!");
        }

        updateInfo(playerPokemon, aiPokemon);
    });
}

function updateInfo(playerPokemon, aiPokemon) {
    playerInfo.querySelector("#player-name").textContent = `Name: ${playerPokemon.name}`;
    playerInfo.querySelector("#player-hp").textContent = `HP: ${playerPokemon.hp}`;

    aiInfo.querySelector("#ai-name").textContent = `Name: ${aiPokemon.name}`;
    aiInfo.querySelector("#ai-hp").textContent = `HP: ${aiPokemon.hp}`;
}

startBattle();
