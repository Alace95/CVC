CREATE TABLE admin(
	userID INT(10) AUTO_INCREMENT,
	username CHAR(20) UNIQUE,
	email CHAR(30) UNIQUE,
	password CHAR(50),
	PRIMARY KEY (userID)
);

CREATE TABLE education(
	userID INT(10),
	school CHAR(40),
	date CHAR(20),
	major CHAR(30),
	minor CHAR(30),
	distinctions CHAR(30),
	FOREIGN KEY (userID) REFERENCES admin(userID)
);


CREATE TABLE employers(
	relationshipID INT(10),
	userID INT(10),
	employerID INT(10),
	employerName CHAR(30),
	FOREIGN KEY(userID) REFERENCES admin(userID)
);

CREATE TABLE work(
	userID INT(10),
	employer CHAR(30),
);