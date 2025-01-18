<?php
if ($argc < 2) {
    echo "Usage: php airport.php \"Your message here\" [length=30] [color]\n";
    exit(1);
}

// Récupération des paramètres
$message = $argv[1];
$length = $argc >= 3 ? (int)$argv[2] : 30;
$color = $argc >= 4 ? $argv[3] : null;

if ($length <= 0) {
    echo "The length must be a positive integer.\n";
    exit(1);
}

// Fonction pour appliquer la couleur
function applyColor($text, $color)
{
    $colors = [
        'red' => "\033[31m",
        'green' => "\033[32m",
        'yellow' => "\033[33m",
        'blue' => "\033[34m",
        'magenta' => "\033[35m",
        'cyan' => "\033[36m",
        'white' => "\033[37m",
    ];

    $reset = "\033[0m";

    if (isset($colors[$color])) {
        return $colors[$color] . $text . $reset;
    }

    return $text;
}

// Boucle infinie pour l'affichage
while (true) {
    for ($i = 0; $i < strlen($message); $i++) {
        // Créer une sous-chaîne de la taille souhaitée
        $display = substr($message, $i, $length);

        // Ajouter des caractères depuis le début si nécessaire
        if (strlen($display) < $length) {
            $display .= substr($message, 0, $length - strlen($display));
        }

        // Effacer la console
        @system(PHP_OS_FAMILY === 'Windows' ? 'cls' : 'clear');

        // Appliquer la couleur et afficher
        echo $color ? applyColor($display, $color) : $display;
        echo "\n";

        // Pause de 0,5 seconde
        usleep(500000);
    }
}
