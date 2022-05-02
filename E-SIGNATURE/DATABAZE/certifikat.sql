CREATE DATABASE IF NOT EXISTS podpis DEFAULT CHARACTER SET utf8 ;

CREATE Table IF NOT EXISTS osoba(
    idosoba INT NOT NULL AUTO_INCREMENT,
    jmeno VARCHAR(45) NOT NULL,
    prijmeni VARCHAR(45) NOT NULL,
    PRIMARY KEY (idosoba)
);

CREATE TABLE IF NOT EXISTS certifakt (
    idcertificate VARCHAR (100) NOT NULL PRIMARY KEY,
    sha1_key VARCHAR(100) NOT NULL,
    hash_value varchar(100) NOT NULL,
    datum DATE NOT NULL,
    osoba_idosoba INT,
    FOREIGN KEY (osoba_idosoba) REFERENCES osoba(idosoba)
);