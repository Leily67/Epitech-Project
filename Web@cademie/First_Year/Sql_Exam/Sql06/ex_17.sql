SELECT 
    m.title AS "Titre du film",
    d.name AS "Nom du distributeur"
FROM 
    movie m
INNER JOIN 
    distributor d ON m.id_distributor = d.id
WHERE 
    m.id IN (21, 87, 263, 413);
