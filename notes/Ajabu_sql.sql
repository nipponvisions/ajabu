-- can use this file to createe database


CREATE DATABASE IF NOT EXISTS AJABU;


-- USE THE CREATED BASE

USE AJABU ;

-- CREATE DATABASE TABLE

CREATE TABLE if NOT EXISTS AJABU_VISITORS
	(
	ID int (11) not null AUTO_INCREMENT,
	Visitor_email varchar(32) NOT NULL,
	LastName varchar(32) NOT NULL,
	FirstName varchar (32) NOT NULL,



	PRIMARY KEY (ID)

	)
	;

	ALTER TABLE AJABU_VISITORS

	-- prevent double records
	ADD UNIQUE (Visitor_email);

	-- LOAD DATA 
	-- prevent duplicate data ie emails
	-- https://lgitsmart.com/2014/10/18/sql-server-tip-preventing-duplicate-records-using-the-unique-constraint/

	INSERT INTO  AJABU_VISITORS ( Visitor_email, LastName, FirstName)
	VALUES ( 'matengee', 'ajabu', 'joy' )

				;