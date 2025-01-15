#!/bin/bash

# Crée le dossier racine
mkdir -p task13

# Crée les sous-dossiers par décennies
mkdir -p task13/"1910 s "/ task13/"1920 s "/ task13/"1930 s "/ task13/"1940 s "/ task13/"1950 s "

# Crée les dossiers pour les professeurs
mkdir -p task13/" Professors "
touch task13/" Professors "/" Frederic Swarts "
touch task13/" Professors "/" Hendrik Lorentz "
touch task13/" Professors "/" Paul Karrer "
touch task13/" Professors "/" Paul Langevin "
touch task13/" Professors "/" William Jackson Pope "

# Crée les dossiers pour les conférences
mkdir -p task13/" Solvay Conferences on Chemistry "/"Constitution and Configuration of Organic Molecules "
mkdir -p task13/" Solvay Conferences on Chemistry "/"Isotopes "/participants
mkdir -p task13/" Solvay Conferences on Chemistry "/"Oxygen , and its chemical and biological reactions "
mkdir -p task13/" Solvay Conferences on Chemistry "/"Vitamins and Hormones "
mkdir -p task13/" Solvay Conferences on Physics "/"Atoms and electrons "
mkdir -p task13/" Solvay Conferences on Physics "/"Electric conductivity of metals and related problems "
mkdir -p task13/" Solvay Conferences on Physics "/"Electrons and photons "/participants
mkdir -p task13/" Solvay Conferences on Physics "/"Magnetism "
mkdir -p task13/" Solvay Conferences on Physics "/"The structure of matter "
mkdir -p task13/" Solvay Conferences on Physics "/"The theory of radiation and quanta "

# Crée les liens symboliques
ln -s "../ Solvay Conferences on Physics /The theory of radiation and quanta " task13/"1910 s "/"1911"
ln -s "../ Solvay Conferences on Physics /The structure of matter " task13/"1910 s "/"1913"
ln -s "../ Solvay Conferences on Physics /Atoms and electrons " task13/"1920 s "/"1921"
ln -s "../ Solvay Conferences on Physics /Electric conductivity of metals and related problems " task13/"1920 s "/"1924"
ln -s "../ Solvay Conferences on Physics /Electrons and photons " task13/"1920 s "/"1927"
ln -s "../ Solvay Conferences on Physics /Magnetism " task13/"1930 s "/"1930"
ln -s "../ Solvay Conferences on Chemistry /Constitution and Configuration of Organic Molecules " task13/"1930 s "/"1931"
ln -s "../ Solvay Conferences on Chemistry /Oxygen , and its chemical and biological reactions " task13/"1930 s "/"1934"
ln -s "../ Solvay Conferences on Chemistry /Vitamins and Hormones " task13/"1930 s "/"1937"
ln -s "../ Solvay Conferences on Chemistry /Isotopes " task13/"1940 s "/"1947"
ln -s "../../ Professors /William Jackson Pope " task13/" Solvay Conferences on Chemistry /Constitution and Configuration of Organic Molecules /chair"
ln -s "../../ Professors /Paul Karrer " task13/" Solvay Conferences on Chemistry /Isotopes /chair"
ln -s "../../ Professors /William Jackson Pope " task13/" Solvay Conferences on Chemistry /Oxygen , and its chemical and biological reactions /chair"
ln -s "../../ Professors /Frederic Swarts " task13/" Solvay Conferences on Chemistry /Vitamins and Hormones /chair"
ln -s "../../ Professors /Hendrik Lorentz " task13/" Solvay Conferences on Physics /Atoms and electrons /chair"
ln -s "../../ Professors /Hendrik Lorentz " task13/" Solvay Conferences on Physics /Electric conductivity of metals and related problems /chair"
ln -s "../../ Professors /Hendrik Lorentz " task13/" Solvay Conferences on Physics /Electrons and photons /chair"
ln -s "../../ Professors /Paul Langevin " task13/" Solvay Conferences on Physics /Magnetism /chair"
ln -s "../../ Professors /Hendrik Lorentz " task13/" Solvay Conferences on Physics /The structure of matter /chair"
ln -s "../../ Professors /Hendrik Lorentz " task13/" Solvay Conferences on Physics /The theory of radiation and quanta /chair"

# Ajouter les participants
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"A . Einstein "
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"E . Schrodinger "
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"H . A . Lorentz "
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"M . Planck "
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"M . Sklodowska - Curie "
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"N . Bohr "
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"W . Heisenberg "
touch task13/" Solvay Conferences on Physics /Electrons and photons "/participants/"W . L . Bragg "
