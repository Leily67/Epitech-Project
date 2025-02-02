Table Quests: 
- id
- nom

Table Etape:
- id

- numero
- quest_id
- pnj_id

- question
- choix
- reponse

Table PNJ:
- id
- nom
- avatar
- vie
- force


Table Joueur:
- id
- nom
- niveau
- force
- vie
- xp

Table Objet:
- id
- nom
- avatar
- type
- force
- vie
- xp

Table Inventaire:
- id
- joueur_id
- objet_id
- equipe


Table Progress:
- id
- done
- numero_etape
- type
- vie
- vie_pnj
- joueur
- quest