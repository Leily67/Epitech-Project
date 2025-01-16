SELECT 
    COUNT(*) AS "Nombre de membres",
    ROUND(AVG(YEAR(CURDATE()) - YEAR(user.birthdate))) AS "Age moyen"
FROM 
    user
WHERE 
    YEAR(CURDATE()) - YEAR(user.birthdate) > 0;
