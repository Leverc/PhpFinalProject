CREATE table userLoginsFinal(
                           user_id INT NOT NULL auto_increment,
                           first_name varchar (255),
                           last_name varchar (255),
                           username varchar (255),
                           password varchar (255),
                           primary key (user_id)
);
CREATE table userList(
                          ID int not null auto_increment,
                          fname varchar (255),
                          lname varchar (255),
                          email varchar (255),
                          telNumber varchar (255),
                          primary key (ID)
);
INSERT into userList(fname, lname, email, telNumber)
VALUES
    ('Ricky', 'Bobby', 'ricky@email.ca', '7051234567'),
    ('Jane', 'Doe', 'jane@gmail.ca', '7051234567'),
    ('Jon', 'Doe', 'jon@gmail.ca', '7051234567'),
    ('Zeb', 'Something', 'zeb@email.com', '7051234567'),
    ('Laura', 'Smith', 'laura@someemail.com', '7051234567'),
    ('Randy', 'Smith', 'randy@gmail.com', '7051234567'),
    ('Pierce', 'Something', 'pierce@anemail.ca', '7051234567');