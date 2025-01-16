SELECT 
    room.floor AS "Numero etage",
    SUM(room.seats) AS "Nombre total de sieges",
    COUNT(room.id) AS "Nombre total de salles"
FROM 
    room
GROUP BY 
    room.floor
ORDER BY 
    "Nombre total de sieges" ASC;
