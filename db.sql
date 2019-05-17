CREATE TABLE IF NOT EXISTS spawn (
    id INT AUTO_INCREMENT,
    name VARCHAR(80) NOT NULL,
    picture_url VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
)  ENGINE=INNODB;

INSERT INTO spawn (name, picture_url)
VALUES ('spawn1', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg'),
('spawn2', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg'),
('spawn3', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg'),
('spawn4', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg'),
('spawn5', 'http://art21.fr/wp-content/uploads/2015/09/photo-histoire-einstein-tire-langue.jpg');
