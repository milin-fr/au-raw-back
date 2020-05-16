# Dictionnaire de données

## Produit (`product`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | L'identifiant de produit |
| title | VARCHAR | NOT NULL | L'intitulé de produit |
| short_description | TEXT | NULL | Le descriptif du produit, visible sur la page d'accueil |
| long_description | TEXT | NULL | Le descriptif du produit, visible sur la page du produit |
| price_euro | INT | NULL | Prix du produit (euros) |
| price_cent | INT | NULL | Prix du produit (centimes) |
| type | VARCHAR | NULL | Type du produit |
| icon | VARCHAR | NULL | L'image du produit, visible sur la page d'accueil |
| image | VARCHAR | NULL | L'image du produit, visible sur la page du produit |
| img_alt | VARCHAR | NULL | Le texte accompagnant l'image pour les lecteurs d'écran |
| tags | entity | NULL | La liste des tags, liés au produit |
| ingredients | entity | NULL | La liste des ingrédients, liés au produit |
| allergens | entity | NULL | La liste des allergènes, liés au produit |
| createdAt | TIMESTAMP |NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date d'ajout de ce produit |
| updatedAt | TIMESTAMP |NULL |La date de la dernière mise à jour de ce produit |
| enabled | BOOLEAN | NULL, DEFAULT 1 | Une option pour le soft delete en cas de besoin |

## Tag (`tag`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | L'identifiant du tag |
| title | VARCHAR | NOT NULL | L'intitulé du tag |
| createdAt | TIMESTAMP |NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date d'ajout de ce tag |
| updatedAt | TIMESTAMP |NULL |La date de la dernière mise à jour de ce tag |
| enabled | BOOLEAN | NULL, DEFAULT 1 | Une option pour le soft delete en cas de besoin |

## Ingrédient (`ingredient`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | L'identifiant de l'ingrédient |
| title | VARCHAR | NOT NULL | L'intitulé de l'ingrédient |
| createdAt | TIMESTAMP |NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date d'ajout de cet ingrédient |
| updatedAt | TIMESTAMP |NULL |La date de la dernière mise à jour de cet ingrédient |
| enabled | BOOLEAN | NULL, DEFAULT 1 | Une option pour le soft delete en cas de besoin |

## Allergèn (`allergen`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | L'identifiant de l'allergèn |
| title | VARCHAR | NOT NULL | L'intitulé de l'allergèn |
| createdAt | TIMESTAMP |NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date d'ajout de cet allergèn |
| updatedAt | TIMESTAMP |NULL |La date de la dernière mise à jour de cet allergèn |
| enabled | BOOLEAN | NULL, DEFAULT 1 | Une option pour le soft delete en cas de besoin |

## Unité de mesure (`unit`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
| id | INT | PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT | L'identifiant de l'unité de mesure |
| title | VARCHAR | NOT NULL | L'intitulé de l'unité de mesure |
| createdAt | TIMESTAMP |NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date d'ajout de cette unité de mesure |
| updatedAt | TIMESTAMP |NULL |La date de la dernière mise à jour de cette unité de mesure |
| enabled | BOOLEAN | NULL, DEFAULT 1 | Une option pour le soft delete en cas de besoin |