#!/bin/bash
git add .
git commit -m "Ajout et mise à jour des fichiers"
git push || echo "Erreur lors du push. Vérifiez votre connexion ou les conflits."
