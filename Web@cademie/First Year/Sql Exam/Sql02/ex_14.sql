SELECT 
    room.number AS "Numero des salles",
    room.name AS "Nom des salles"
FROM 
    room
WHERE 
    room.seats > 200
    AND room.floor <> 0
ORDER BY 
    room.number ASC;
