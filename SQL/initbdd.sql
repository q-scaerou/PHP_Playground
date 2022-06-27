DROP DATABASE IF EXISTS pico;

CREATE DATABASE pico;

CREATE USER IF NOT EXISTS 'admin_pico'@'localhost' IDENTIFIED BY 'pico123';
	
GRANT ALL PRIVILEGES ON `pico`.* TO 'admin_pico'@'localhost';

CREATE TABLE Inventory (
	id INT PRIMARY KEY NOT NULL, 
	num_inventaire VARCHAR(15), 
	mode_acquisition VARCHAR(40),
	nom_donateur VARCHAR(40), 
	date_acquisition DATE, 
	instanc_scientifique VARCHAR(255), 
	prix_achat_subvention VARCHAR(25), 
	date_affec DATE, 
	designation VARCHAR(75), 
	inscriptions VARCHAR(255), 
	matiere VARCHAR(75), 
	technique VARCHAR(75), 
	mesures VARCHAR(255), 
	etat VARCHAR(75), 
	auteur VARCHAR(75), 
	datation VARCHAR(20), 
	fonction_usage VARCHAR(40), 
	prov_geo VARCHAR(40), 
	observations VARCHAR(255));

LOAD DATA LOCAL INFILE 'C:/wamp64/www/Projet/SQL/Inventory.csv' INTO TABLE Inventory FIELDS TERMINATED BY ";" LINES TERMINATED BY "\n";

CREATE TABLE Prets (
	id_pret INT PRIMARY KEY NOT NULL, 
	num_pret VARCHAR(12), 
	destination VARCHAR(40), 
	ville VARCHAR(40), 
	date_debut DATE, 
	date_retour_estimee DATE, 
	estencours boolean, 
	inventory_id INT NOT NULL, 
	FOREIGN KEY(inventory_id) REFERENCES Inventory(id));

LOAD DATA LOCAL INFILE 'C:/wamp64/www/Projet/SQL/Emprunts.csv' INTO TABLE Prets FIELDS TERMINATED BY ";" LINES TERMINATED BY "\n";

CREATE TABLE Administrateurs (
	id_admin INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
	admin_name VARCHAR(15), 
	admin_pin VARCHAR(4));

LOAD DATA LOCAL INFILE 'C:/wamp64/www/Projet/SQL/Admin.csv' INTO TABLE Administrateurs FIELDS TERMINATED BY ";" LINES TERMINATED BY "\n";