SELECT 
    COUNT(*) AS "Nombre de films",
    YEAR(release_date) AS "Annee de sortie"
FROM 
    movie
GROUP BY 
    YEAR(release_date)
ORDER BY 
    YEAR(release_date) DESC;
