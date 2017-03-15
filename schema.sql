CREATE TABLE offers{
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR[55] NOT NULL,
	description VARCHAR[255],
	price INT(6) UNSIGNED,
	ownerid INT(6),
	views int(6) UNSIGNED,
	FOREIGN KEY (ownerid) REFERENCES users(id)
}