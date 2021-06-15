/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  M4rK
 * Created: 2021. jún. 2.
 */

CREATE TABLE directors(
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT DEFAULT NULL,
    birthyear INT NOT NULL,
    
    CONSTRAINT PK_directors PRIMARY KEY(id)
    );
    
    INSERT INTO directors(name,birthyear) VALUES ('Steven Spielberg', 1946);
    INSERT INTO directors(name,birthyear) VALUES ('James Wan', 1977);


CREATE TABLE genres(
    id INT NOT NULL AUTO_INCREMENT,
    director_id INT NOT NULL,
    name VARCHAR(500) NOT NULL,
    description TEXT DEFAULT NULL,

    CONSTRAINT PK_genres PRIMARY KEY(id),
    CONSTRAINT FK_genres_director_id FOREIGN KEY(director_id) REFERENCES directors(id)
);

CREATE TABLE movies(

    id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(200) NOT NULL,
    description TEXT DEFAULT NULL,
    
    CONSTRAINT PK_movies PRIMARY KEY(id)
    
);

INSERT INTO movies(title) VALUES ('Army Of The Dead');
INSERT INTO movies(title) VALUES ('The Purge');

CREATE TABLE ratings(
    id INT NOT NULL AUTO_INCREMENT,
    movie_id INT NOT NULL,
    number INT NOT NULL DEFAULT 1,
    
    CONSTRAINT PK_ratings PRIMARY KEY(id),
    CONSTRAINT FK_ratings_movie_id FOREIGN KEY(movie_id) REFERENCES movies(id)
);

INSERT INTO ratings(movie_id,number) VALUES (1,4);
INSERT INTO ratings(movie_id,number) VALUES (2,6);

CREATE TABLE publishyear(
	id INT NOT NULL AUTO_INCREMENT,
    movie_id INT NOT NULL,
    releasedate INT NOT NULL,
    
    CONSTRAINT PK_publishyear PRIMARY KEY(id),
    CONSTRAINT FK_publishyear_movie_id FOREIGN KEY(movie_id) REFERENCES movies(id)
);

INSERT INTO publishyear(movie_id,releasedate) VALUES (1,2020);
INSERT INTO publishyear(movie_id,releasedate) VALUES (2,2013);
                                  





    