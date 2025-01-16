SELECT name AS `Nom de l'abonnement le plus cher`, price AS `Prix`
FROM subscription
ORDER BY price DESC
LIMIT 1;