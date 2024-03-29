CREATE DATABASE guvi;

use guvi;

CREATE TABLE login(
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(200),
UNIQUE (email))

CREATE TABLE users(
	login_id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	mobilenumber VARCHAR(50) NOT NULL,
	degree VARCHAR(50) NOT NULL,
	age INT(3) NOT NULL,
	collegename VARCHAR(120) NOT NULL,
	location VARCHAR(50) NOT NULL,
	PRIMARY KEY (login_id),
	FOREIGN KEY (login_id) REFERENCES login(id)
)