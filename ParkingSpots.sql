CREATE TABLE ParkingSpot (
id serial,
size int NOT NULL,
licensePlate varchar(255) DEFAULT NULL,
startTime TIMESTAMP,
PRIMARY KEY(id)
);

CREATE TABLE ParkingSize (
id serial,
size varchar(255) NOT NULL,
PRIMARY KEY(id)
);

INSERT INTO ParkingSize (size) VALUES ('Small');
INSERT INTO ParkingSize (size) VALUES ('Medium');
INSERT INTO ParkingSize (size) VALUES ('Large');
INSERT INTO ParkingSize (size) VALUES ('Super-Sized');

INSERT INTO ParkingSpot (size) VALUES (0);
INSERT INTO ParkingSpot (size) VALUES (0);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (1);
INSERT INTO ParkingSpot (size) VALUES (2);
INSERT INTO ParkingSpot (size) VALUES (2);
INSERT INTO ParkingSpot (size) VALUES (2);
INSERT INTO ParkingSpot (size) VALUES (2);
INSERT INTO ParkingSpot (size) VALUES (2);
INSERT INTO ParkingSpot (size) VALUES (2);
INSERT INTO ParkingSpot (size) VALUES (2);
INSERT INTO ParkingSpot (size) VALUES (3);
INSERT INTO ParkingSpot (size) VALUES (3);

CREATE TABLE Statistics (
id serial,
attr varchar(255),
value float,
PRIMARY KEY(id)
);