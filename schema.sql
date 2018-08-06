CREATE TABLE admin(
	userID INT(10),
	username CHAR(20) UNIQUE,
	email CHAR(30) UNIQUE,
	password CHAR(50),
	PRIMARY KEY (userID)
);