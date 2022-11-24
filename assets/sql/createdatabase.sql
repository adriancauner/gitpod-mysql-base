
USE TheilonAdrian;
CREATE TABLE livros (
id INT AUTO_INCREMENT PRIMARY KEY, 
titulo VARCHAR(255) NOT NULL,
id_genero INT NOT NULL,
FOREIGN KEY (id_genero) REFERENCES generos (id)
);