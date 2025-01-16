SELECT 
    user.zipcode AS "Codes postaux"
FROM 
    user
GROUP BY 
    user.zipcode
HAVING 
    COUNT(*) > 1
ORDER BY 
    user.zipcode ASC;
