----------Creation of the table user--------
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(100) NOT NULL UNIQUE, email VARCHAR(100), password VARCHAR(255) NOT NULL, creationDate DATETIME DEFAULT now(), modificationDate DATETIME DEFAULT now(), lastConnexion DATETIME, modifiedDate DATETIME, roles json
);

-----------Insertion of datas-----------

insert into
    user (
        username, password, email, roles
    )
values (
        'antoine', sha1('1234'), 'antoine@localhost.com', '["ROLE_ADMIN","ROLE_ASSISTANT","ROLE_DEV","ROLE_USER"]'
    ),
    (
        'paul', sha1('1234'), 'paul@localhost.com', '["ROLE_ASSISTANT","ROLE_DEV","ROLE_USER"]'
    ),
    (
        'marie', sha1('1234'), 'marie@localhost.com', '["ROLE_DEV","ROLE_USER"]'
    );

-----Creation table Role--------
create table role (
    id INT AUTO_INCREMENT PRIMARY KEY, rang varchar(20), libelle varchar(200)
);
--------RESULT-----------
MariaDB [dwwm]> create table role (id INT AUTO_INCREMENT PRIMARY KEY,rang varchar(20),libelle varchar (200)) ;

Query OK, 0 rows affected (0, 009 sec)
---------insertion of datas-----------

insert into
    role (rang, libelle)
values ('001', 'ROLE_ADMIN'),
    ('002', 'ROLE_ASSISTANT'),
    ('003', 'ROLE_DEV'),
    ('004', 'ROLE_USER');

--------RESULT-----------
MariaDB [dwwm]> insert into  role(rang,libelle) values
    -> ('001','ROLE_ADMIN'),
    -> ('002','ROLE_ASSISTANT'),
    -> ('003','ROLE_DEV'),
    -> ('004','ROLE_USER');

Query OK, 4 rows affected (0,001 sec)
Records: 4  Duplicates: 0  Warnings: 0


insert into
    user (
        username, password, email, roles
    )
values (
        'admin', sha1('1234'), 'admin@localhost.com', '["ROLE_ADMIN","ROLE_ASSISTANT","ROLE_DEV","ROLE_USER"]'
    );

Database changed
MariaDB [dwwm]> insert into user(username,password,email,roles) values
    -> ('admin',sha1('1234'),'admin@localhost.com','["ROLE_ADMIN","ROLE_ASSISTANT","ROLE_DEV","ROLE_USER"]');

Query OK, 1 row affected (0, 003 sec)

MariaDB [dwwm]> 