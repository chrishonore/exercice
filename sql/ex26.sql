use exercice26;
    /*
    Créer une Table Equipe. Cette table aura les champs suivants:
IdEquipe (clef primaire): Entier, non signé, NOT NULL, auto-incrémenté.
NomClub: chaîne de max 30 caractères, NOT NULL.
Localité: chaîne de max 30 caractères, NOT NULL.
Division: TINYINT non signé, NOT NULL.

     */
DROP TABLE IF EXISTS Equipe;
CREATE TABLE Equipe
(
    id_equipe INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom_du_club VARCHAR(30) NOT NULL ,
    localite VARCHAR(30) NOT NULL ,
    division TINYINT UNSIGNED NOT NULL
);