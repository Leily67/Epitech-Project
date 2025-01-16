SELECT 
    floor AS "Numero etage",
    SUM(seats) AS "Nombre total de sieges",
    COUNT(id) AS "Nombre total de salles"
FROM 
    room
GROUP BY 
    floor
ORDER BY 
    SUM(seats) ASC;
