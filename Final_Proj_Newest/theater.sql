DROP DATABASE IF EXISTS `theater`;
CREATE DATABASE `theater`;
USE `theater`;

CREATE TABLE CUSTOMER
(	Customer_id	int(16)	NOT NULL AUTO_INCREMENT,
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
/*
CREATE TABLE MOVIE
(	Movie_id	varchar(16) NOT NULL,
	Theater_id varchar(16),
	Movie_name varchar(50),
	Movie_rating	varchar(5),
	Cost int(2),
	PRIMARY KEY (Movie_id),
	FOREIGN KEY (Theater_id) REFERENCES THEATER_LOCATION (Theater_id)
);
*/
CREATE TABLE TICKETS
(	Ticket_id	int(16)	NOT NULL AUTO_INCREMENT,
	Movie_name	varchar(50),
	Movie_rating	varchar(5),
	Dates	date,
	Showtime time,
	Theater_id varchar(16),
	PRIMARY KEY	(Ticket_id),
	FOREIGN KEY (Theater_id) REFERENCES THEATER_LOCATION (Theater_id)
);

CREATE TABLE PAYMENT
(	Tranasction_num	int(16)	NOT NULL AUTO_INCREMENT,
	Fname	varchar(25) NOT NULL,
	Lname	varchar(25) NOT NULL,
	Card_number varchar(19) NOT NULL,
	Cvv varchar(4) NOT NULL,
	exp_date	varchar(5) NOT NULL,
	PRIMARY KEY(Tranasction_num)
);

CREATE TABLE SHOWTIMES
(	Showtime_id	varchar(16)	NOT NULL,
	Theater_id	varchar(16)	NOT NULL,
	Movie_name varchar(50),
	Movie_rating	varchar(5),
	Cost int(2),
	Showtime	time,
	Dates	date,
	PRIMARY KEY (Showtime_id),
	FOREIGN KEY (Theater_id) REFERENCES THEATER_LOCATION (Theater_id)
);

CREATE TABLE SEATS_TAKEN
(	Seat_id	int(16)	NOT NULL AUTO_INCREMENT,
	Seat_num	varchar(5),
	Theater_id	varchar(16),
	Showtime_id varchar(16),
	PRIMARY KEY (Seat_id),
	FOREIGN KEY (Theater_id) REFERENCES THEATER_LOCATION (Theater_id),
	FOREIGN KEY (Showtime_id) REFERENCES SHOWTIMES (Showtime_id)

);

INSERT INTO CUSTOMER values ('13245678', 'a@h.com','bill','0000');

INSERT INTO THEATER_LOCATION values ('12345', 'AMC', '0000 Roadroad', 'Atlanta', 'GA', '30301');

INSERT INTO SEATS_TAKEN values ('123456', '101', '12345', '0001');

/*
INSERT INTO MOVIE values ('1', '12345', 'Joker', 'R', '14');	
INSERT INTO MOVIE values ('2', '12345', 'The Dark Knight', 'PG13', '10');
INSERT INTO MOVIE values ('3', '12345', 'Batman Begins', 'PG13', '8');
INSERT INTO MOVIE values ('4', '12345', 'The Dark Knight Rises', 'PG13', '12');
INSERT INTO MOVIE values ('5', '12345', 'Iron Man', 'PG13', '9');
INSERT INTO MOVIE values ('6', '12345', 'Iron Man 2', 'PG13', '11');
INSERT INTO MOVIE values ('7', '12345', 'Iron Man 3', 'PG13', '13');
*/

INSERT INTO TICKETS values ('111000', 'Joker', 'R', '2020-08-18', '15:30:00', '12345');

INSERT INTO PAYMENT values ('1', 'Bill', 'Sanders', '0000 1111 0000 1111', '000', '01/21');

INSERT INTO SHOWTIMES values ('0001', '12345', 'joker', 'R', '14', '14:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0002', '12345', 'joker', 'R', '14', '15:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0003', '12345', 'joker', 'R', '14', '17:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0004', '12345', 'joker', 'R', '14', '18:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0005', '12345', 'joker', 'R', '14', '20:00:00', '2020-12-01');

INSERT INTO SHOWTIMES values ('0006', '12345', 'joker', 'R', '14', '14:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0007', '12345', 'joker', 'R', '14', '15:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0008', '12345', 'joker', 'R', '14', '17:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0009', '12345', 'joker', 'R', '14', '18:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0010', '12345', 'joker', 'R', '14', '20:00:00', '2020-12-02');

INSERT INTO SHOWTIMES values ('0011', '12345', 'joker', 'R', '14', '14:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0012', '12345', 'joker', 'R', '14', '15:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0013', '12345', 'joker', 'R', '14', '17:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0014', '12345', 'joker', 'R', '14', '18:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0015', '12345', 'joker', 'R', '14', '20:00:00', '2020-12-03');

INSERT INTO SHOWTIMES values ('0016', '12345', 'joker', 'R', '14', '14:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0017', '12345', 'joker', 'R', '14', '15:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0018', '12345', 'joker', 'R', '14', '17:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0019', '12345', 'joker', 'R', '14', '18:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0020', '12345', 'joker', 'R', '14', '20:00:00', '2020-12-04');


INSERT INTO SHOWTIMES values ('0021', '12345', 'The Dark Knight', 'PG13', '10', '14:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0022', '12345', 'The Dark Knight', 'PG13', '10', '15:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0023', '12345', 'The Dark Knight', 'PG13', '10', '17:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0024', '12345', 'The Dark Knight', 'PG13', '10', '18:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0025', '12345', 'The Dark Knight', 'PG13', '10', '20:00:00', '2020-12-01');

INSERT INTO SHOWTIMES values ('0026', '12345', 'The Dark Knight', 'PG13', '10', '14:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0027', '12345', 'The Dark Knight', 'PG13', '10', '15:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0028', '12345', 'The Dark Knight', 'PG13', '10', '17:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0029', '12345', 'The Dark Knight', 'PG13', '10', '18:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0030', '12345', 'The Dark Knight', 'PG13', '10', '20:00:00', '2020-12-02');

INSERT INTO SHOWTIMES values ('0031', '12345', 'The Dark Knight', 'PG13', '10', '14:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0032', '12345', 'The Dark Knight', 'PG13', '10', '15:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0033', '12345', 'The Dark Knight', 'PG13', '10', '17:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0034', '12345', 'The Dark Knight', 'PG13', '10', '18:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0035', '12345', 'The Dark Knight', 'PG13', '10', '20:00:00', '2020-12-03');

INSERT INTO SHOWTIMES values ('0036', '12345', 'The Dark Knight', 'PG13', '10', '14:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0037', '12345', 'The Dark Knight', 'PG13', '10', '15:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0038', '12345', 'The Dark Knight', 'PG13', '10', '17:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0039', '12345', 'The Dark Knight', 'PG13', '10', '18:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0040', '12345', 'The Dark Knight', 'PG13', '10', '20:00:00', '2020-12-04');



INSERT INTO SHOWTIMES values ('0041', '12345', 'Batman Begins', 'PG13', '8', '14:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0042', '12345', 'Batman Begins', 'PG13', '8', '15:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0043', '12345', 'Batman Begins', 'PG13', '8', '17:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0044', '12345', 'Batman Begins', 'PG13', '8', '18:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0045', '12345', 'Batman Begins', 'PG13', '8', '20:00:00', '2020-12-01');

INSERT INTO SHOWTIMES values ('0046', '12345', 'Batman Begins', 'PG13', '8', '14:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0047', '12345', 'Batman Begins', 'PG13', '8', '15:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0048', '12345', 'Batman Begins', 'PG13', '8', '17:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0049', '12345', 'Batman Begins', 'PG13', '8', '18:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0050', '12345', 'Batman Begins', 'PG13', '8', '20:00:00', '2020-12-02');

INSERT INTO SHOWTIMES values ('0051', '12345', 'Batman Begins', 'PG13', '8', '14:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0052', '12345', 'Batman Begins', 'PG13', '8', '15:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0053', '12345', 'Batman Begins', 'PG13', '8', '17:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0054', '12345', 'Batman Begins', 'PG13', '8', '18:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0055', '12345', 'Batman Begins', 'PG13', '8', '20:00:00', '2020-12-03');

INSERT INTO SHOWTIMES values ('0056', '12345', 'Batman Begins', 'PG13', '8', '14:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0057', '12345', 'Batman Begins', 'PG13', '8', '15:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0058', '12345', 'Batman Begins', 'PG13', '8', '17:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0059', '12345', 'Batman Begins', 'PG13', '8', '18:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0060', '12345', 'Batman Begins', 'PG13', '8', '20:00:00', '2020-12-04');



INSERT INTO SHOWTIMES values ('0061', '12345', 'The Dark Knight Rises', 'PG13', '12', '14:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0062', '12345', 'The Dark Knight Rises', 'PG13', '12', '15:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0063', '12345', 'The Dark Knight Rises', 'PG13', '12', '17:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0064', '12345', 'The Dark Knight Rises', 'PG13', '12', '18:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0065', '12345', 'The Dark Knight Rises', 'PG13', '12', '20:00:00', '2020-12-01');

INSERT INTO SHOWTIMES values ('0066', '12345', 'The Dark Knight Rises', 'PG13', '12', '14:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0067', '12345', 'The Dark Knight Rises', 'PG13', '12', '15:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0068', '12345', 'The Dark Knight Rises', 'PG13', '12', '17:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0069', '12345', 'The Dark Knight Rises', 'PG13', '12', '18:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0070', '12345', 'The Dark Knight Rises', 'PG13', '12', '20:00:00', '2020-12-02');

INSERT INTO SHOWTIMES values ('0071', '12345', 'The Dark Knight Rises', 'PG13', '12', '14:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0072', '12345', 'The Dark Knight Rises', 'PG13', '12', '15:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0073', '12345', 'The Dark Knight Rises', 'PG13', '12', '17:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0074', '12345', 'The Dark Knight Rises', 'PG13', '12', '18:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0075', '12345', 'The Dark Knight Rises', 'PG13', '12', '20:00:00', '2020-12-03');

INSERT INTO SHOWTIMES values ('0076', '12345', 'The Dark Knight Rises', 'PG13', '12', '14:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0077', '12345', 'The Dark Knight Rises', 'PG13', '12', '15:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0078', '12345', 'The Dark Knight Rises', 'PG13', '12', '17:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0079', '12345', 'The Dark Knight Rises', 'PG13', '12', '18:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0080', '12345', 'The Dark Knight Rises', 'PG13', '12', '20:00:00', '2020-12-04');



INSERT INTO SHOWTIMES values ('0081', '12345', 'Iron Man', 'PG13', '9', '14:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0082', '12345', 'Iron Man', 'PG13', '9', '15:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0083', '12345', 'Iron Man', 'PG13', '9', '17:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0084', '12345', 'Iron Man', 'PG13', '9', '18:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0085', '12345', 'Iron Man', 'PG13', '9', '20:00:00', '2020-12-01');

INSERT INTO SHOWTIMES values ('0086', '12345', 'Iron Man', 'PG13', '9', '14:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0087', '12345', 'Iron Man', 'PG13', '9', '15:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0088', '12345', 'Iron Man', 'PG13', '9', '17:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0089', '12345', 'Iron Man', 'PG13', '9', '18:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0090', '12345', 'Iron Man', 'PG13', '9', '20:00:00', '2020-12-02');

INSERT INTO SHOWTIMES values ('0091', '12345', 'Iron Man', 'PG13', '9', '14:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0092', '12345', 'Iron Man', 'PG13', '9', '15:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0093', '12345', 'Iron Man', 'PG13', '9', '17:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0094', '12345', 'Iron Man', 'PG13', '9', '18:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0095', '12345', 'Iron Man', 'PG13', '9', '20:00:00', '2020-12-03');

INSERT INTO SHOWTIMES values ('0096', '12345', 'Iron Man', 'PG13', '9', '14:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0097', '12345', 'Iron Man', 'PG13', '9', '15:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0098', '12345', 'Iron Man', 'PG13', '9', '17:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0099', '12345', 'Iron Man', 'PG13', '9', '18:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0100', '12345', 'Iron Man', 'PG13', '9', '20:00:00', '2020-12-04');


INSERT INTO SHOWTIMES values ('0101', '12345', 'Iron Man 2', 'PG13', '11', '14:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0102', '12345', 'Iron Man 2', 'PG13', '11', '15:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0103', '12345', 'Iron Man 2', 'PG13', '11', '17:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0104', '12345', 'Iron Man 2', 'PG13', '11', '18:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0105', '12345', 'Iron Man 2', 'PG13', '11', '20:30:00', '2020-12-01');

INSERT INTO SHOWTIMES values ('0106', '12345', 'Iron Man 2', 'PG13', '11', '14:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0107', '12345', 'Iron Man 2', 'PG13', '11', '15:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0108', '12345', 'Iron Man 2', 'PG13', '11', '17:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0109', '12345', 'Iron Man 2', 'PG13', '11', '18:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0110', '12345', 'Iron Man 2', 'PG13', '11', '20:30:00', '2020-12-02');

INSERT INTO SHOWTIMES values ('0111', '12345', 'Iron Man 2', 'PG13', '11', '14:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0112', '12345', 'Iron Man 2', 'PG13', '11', '15:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0113', '12345', 'Iron Man 2', 'PG13', '11', '17:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0114', '12345', 'Iron Man 2', 'PG13', '11', '18:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0115', '12345', 'Iron Man 2', 'PG13', '11', '20:30:00', '2020-12-03');

INSERT INTO SHOWTIMES values ('0116', '12345', 'Iron Man 2', 'PG13', '11', '14:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0117', '12345', 'Iron Man 2', 'PG13', '11', '15:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0118', '12345', 'Iron Man 2', 'PG13', '11', '17:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0119', '12345', 'Iron Man 2', 'PG13', '11', '18:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0120', '12345', 'Iron Man 2', 'PG13', '11', '20:30:00', '2020-12-04');


INSERT INTO SHOWTIMES values ('0121', '12345', 'Iron Man 3', 'PG13', '13', '14:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0122', '12345', 'Iron Man 3', 'PG13', '13', '15:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0123', '12345', 'Iron Man 3', 'PG13', '13', '17:00:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0124', '12345', 'Iron Man 3', 'PG13', '13', '18:30:00', '2020-12-01');
INSERT INTO SHOWTIMES values ('0125', '12345', 'Iron Man 3', 'PG13', '13', '19:00:00', '2020-12-01');

INSERT INTO SHOWTIMES values ('0126', '12345', 'Iron Man 3', 'PG13', '13', '14:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0127', '12345', 'Iron Man 3', 'PG13', '13', '15:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0128', '12345', 'Iron Man 3', 'PG13', '13', '17:00:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0129', '12345', 'Iron Man 3', 'PG13', '13', '18:30:00', '2020-12-02');
INSERT INTO SHOWTIMES values ('0130', '12345', 'Iron Man 3', 'PG13', '13', '19:00:00', '2020-12-02');

INSERT INTO SHOWTIMES values ('0131', '12345', 'Iron Man 3', 'PG13', '13', '14:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0132', '12345', 'Iron Man 3', 'PG13', '13', '15:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0133', '12345', 'Iron Man 3', 'PG13', '13', '17:00:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0134', '12345', 'Iron Man 3', 'PG13', '13', '18:30:00', '2020-12-03');
INSERT INTO SHOWTIMES values ('0135', '12345', 'Iron Man 3', 'PG13', '13', '19:00:00', '2020-12-03');

INSERT INTO SHOWTIMES values ('0136', '12345', 'Iron Man 3', 'PG13', '13', '14:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0137', '12345', 'Iron Man 3', 'PG13', '13', '15:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0138', '12345', 'Iron Man 3', 'PG13', '13', '17:00:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0139', '12345', 'Iron Man 3', 'PG13', '13', '18:30:00', '2020-12-04');
INSERT INTO SHOWTIMES values ('0140', '12345', 'Iron Man 3', 'PG13', '13', '19:00:00', '2020-12-04');

