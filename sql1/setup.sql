CREATE TABLE Evidencija (
    id INT(11) NOT NULL AUTO_INCREMENT,
    ime_studenta VARCHAR(32) NOT NULL,
    prezime_studenta VARCHAR(32) NOT NULL,
    JMBAG INT(10) NOT NULL,
    prisutnost VARCHAR(32) NOT NULL,
    PRIMARY KEY (id)
);