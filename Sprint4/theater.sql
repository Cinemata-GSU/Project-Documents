DROP DATABASE IF EXISTS `theater`;
CREATE DATABASE `theater`;
USE `theater`;

CREATE TABLE CUSTOMER
(	Customer_id	int(16) AUTO_INCREMENT	NOT NULL,
	Fname	varchar(25),
	Lname	varchar(25),
	Pnumber	char(10),
	DOB	date,
	Email	varchar(50)	NOT NULL,
	Username	varchar(25) NOT NULL,
	Password	varchar(50)	NOT NULL,
	PRIMARY KEY (Customer_id)
);

CREATE TABLE THEATER_LOCATION
(	Theater_id	varchar(16)	NOT NULL,
	Name varchar(25) NOT NULL,
	Address varchar(50) NOT NULL,
	City	varchar(25) NOT NULL,
	StateL	char(2)	NOT NULL,
	Zip_code	char(5)	NOT NULL,
	PRIMARY KEY(Theater_id)
);

CREATE TABLE TICKETS
(	Ticket_id	varchar(16)	NOT NULL,
	Movie_name	varchar(50),
	Movie_rating	varchar(5),
	Datet date,
	Showtime time,
	Theater_id varchar(16),
	PRIMARY KEY	(Ticket_id),
	FOREIGN KEY (Theater_id) REFERENCES THEATER_LOCATION (Theater_id)
);

CREATE TABLE PAYMENT
(	Tranasction_num	varchar(16)	NOT NULL,
	Customer_id	varchar(16) NOT NULL,
	Cvv varchar(4) NOT NULL,
	Card_number varchar(19) NOT NULL,
	Ticket_id varchar(16),
	PRIMARY KEY(Tranasction_num),
	FOREIGN KEY (Customer_id) REFERENCES CUSTOMER (Customer_id),
	FOREIGN KEY (Ticket_id) REFERENCES TICKETS (Ticket_id)
);

CREATE TABLE SHOWTIMES
(	Showtime_id	varchar(16)	NOT NULL,
	Theater_id	varchar(16)	NOT NULL,
	Showtime	time,
	DateS date,
	PRIMARY KEY (Showtime_id),
	FOREIGN KEY (Theater_id) REFERENCES THEATER_LOCATION (Theater_id)
);

CREATE TABLE SEATS_AVAILABLE
(	Room_id	varchar(16)	NOT NULL,
	Room_number	varchar(3)	NOT NULL,
	Seat_number	varchar(3),
	Customer_id	varchar(16),
	Ticket_id	varchar(16),
	Theater_id	varchar(16),
	Seats_remaining	varchar(3),
	Showtime_id varchar(16) NOT NULL,
	PRIMARY KEY (Room_id),
	FOREIGN KEY (Customer_id) REFERENCES CUSTOMER (Customer_id),
	FOREIGN KEY (Ticket_id) REFERENCES TICKETS (Ticket_id),
	FOREIGN KEY (Theater_id) REFERENCES THEATER_LOCATION (Theater_id),
	FOREIGN KEY (Showtime_id) REFERENCES SHOWTIMES (Showtime_id)

);

INSERT INTO CUSTOMER values ('13245678','Bill', 'Sanders', '1234567890', '1994-08-05', 'asims30@student.gsu.edu','bill','0000');

INSERT INTO THEATER_LOCATION values ('12345', 'AMC', '0000 Roadroad', 'Atlanta', 'GA', '30301');

INSERT INTO TICKETS values ('111000', 'Jumanji', 'PG-13', '2020-08-18', '15:30:00', '12345');

INSERT INTO PAYMENT values ('000111', '13245678', '000', '0000 1111 0000 1111', '111000');

INSERT INTO SHOWTIMES values ('3333', '12345', '15:30:00', '2020-08-18');

INSERT INTO SEATS_AVAILABLE values ('55555', '5', '123', '13245678', '111000', '12345', '25', '3333');