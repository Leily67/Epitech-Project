SELECT 
    name AS "Nom de l’abonnement",
    ROUND(price / duration, 2) AS "Prix a la journee"
FROM 
    subscription;
