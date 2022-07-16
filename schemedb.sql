create table notes (
    id int not null AUTO_INCREMENT,
    uuid varchar(255) not null unique,
    title varchar (255) not null,
    content text not null,
    updated date not null,
    PRIMARY KEY (id)
);