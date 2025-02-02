let pokemonId = 1;

// Fonction pour afficher le Pokémon précédent
function previousPokemon() {
    if (pokemonId == 1) {
        pokemonId = 1000;
    } else {
        pokemonId--;
    }
    getAndShowPokemon(pokemonId);
}

// Fonction pour afficher le Pokémon suivant
function nextPokemon() {
    if (pokemonId == 1000) {
        pokemonId = 1;
    } else {
        pokemonId++;
    }
    getAndShowPokemon(pokemonId);
}

// Fonction pour récupérer et afficher les informations d'un Pokémon
function getAndShowPokemon(pokemonId) {
    fetch("https://pokeapi.co/api/v2/pokemon/" + pokemonId)
        .then(response => response.json())
        .then(pokemon => {
            fetchSpeciesData(pokemon.species.url); // Appel de la fonction pour obtenir les données d'espèce (incluant la description)
            showPokemonInfo(pokemon);
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

// Fonction pour afficher les informations du Pokémon
function showPokemonInfo(pokemon) {
    // Afficher les informations sur le côté gauche
    let pokemonImage = document.getElementById("screen-left-image");
    pokemonImage.setAttribute("src", pokemon.sprites.other.dream_world.front_default);
    
    let pokemonHeight = document.getElementById("pokemon-height");
    pokemonHeight.innerHTML = pokemon.height;

    let pokemonWeight = document.getElementById("pokemon-weight");
    pokemonWeight.innerHTML = pokemon.weight;

    // Afficher les informations sur le côté droit
    let pokemonTitle = document.getElementById("pokemon-title");
    pokemonTitle.innerHTML = pokemon.name + " (" + pokemon.id + ")";

    let pokemonHp = document.getElementById("pokemon-hp");
    pokemonHp.innerHTML = pokemon.stats[0].base_stat;

    let pokemonAttack = document.getElementById("pokemon-attack");
    pokemonAttack.innerHTML = pokemon.stats[1].base_stat;

    let pokemonDefense = document.getElementById("pokemon-defense");
    pokemonDefense.innerHTML = pokemon.stats[2].base_stat;

    let pokemonSpeed = document.getElementById("pokemon-speed");
    pokemonSpeed.innerHTML = pokemon.stats[4].base_stat;

    let pokemonType1 = document.getElementById("pokemon-type-1");
    let pokemonType2 = document.getElementById("pokemon-type-2");
    pokemonType1.innerHTML = pokemon.types[0].type.name;  
    if(pokemon.types.length > 1) {
        pokemonType2.innerHTML = pokemon.types[1].type.name;
    } else {
        pokemonType2.innerHTML = "";
    }
}

// Sélectionnez l'input et ajoutez un gestionnaire d'événements pour la touche "Enter"
const pokemonSearchInput = document.getElementById("pokemon-search-input");
pokemonSearchInput.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        searchPokemon();
    }
});

// Fonction pour rechercher un Pokémon par son nom ou son ID
function searchPokemon() {
    const searchTerm = pokemonSearchInput.value.trim();
    if (searchTerm !== "") {
        // Si l'entrée est un numéro, utilisez-le comme ID
        if (!isNaN(searchTerm)) {
            pokemonId = parseInt(searchTerm);
            getAndShowPokemon(pokemonId);
        } else {
            // Sinon, recherchez le Pokémon par nom
            fetch("https://pokeapi.co/api/v2/pokemon/" + searchTerm.toLowerCase())
                .then(response => response.json())
                .then(pokemon => {
                    getAndShowPokemon(pokemon.id);
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                });
        }
    }
}

// Fonction pour récupérer les données d'espèce du Pokémon (incluant la description)
function fetchSpeciesData(speciesUrl) {
    fetch(speciesUrl)
        .then(response => response.json())
        .then(speciesData => {
            // Trouver la première entrée de description en anglais
            const description = speciesData.flavor_text_entries.find(entry => entry.language.name === 'en').flavor_text;
            document.getElementById('pokemon-describe').textContent = description;
        })
        .catch(error => {
            console.error('Error fetching species data:', error);
        });
}


