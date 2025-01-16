SELECT 
    title AS "Titre du film",
    DATEDIFF(CURDATE(), release_date) AS "Nombre de jours passes"
FROM 
    movie
WHERE 
    YEAR(release_date) >= 2016;
