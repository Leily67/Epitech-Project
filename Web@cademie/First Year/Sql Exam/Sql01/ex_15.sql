SELECT 
    COUNT(*) AS "Nombre de films",
    YEAR(movie.release_date) AS "Annee de sortie"
FROM 
    movie
GROUP BY 
    YEAR(movie.release_date)
ORDER BY 
    "Nombre de films" DESC,
    "Annee de sortie" ASC;
