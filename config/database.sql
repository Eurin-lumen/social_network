/* le code de la base de donné */
-- création de la base de donnée
create database boom;
-- utiliser notre base de donnée : user boom;
CREATE TABLE users(
  id int PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  pseudo  VARCHAR(255) UNIQUE,
  email VARCHAR(255) UNIQUE,
  password VARCHAR(255));
-- MODIFY table users
ALTER TABLE users ADD COLUMN active ENUM('0','1') DEFAULT '0';