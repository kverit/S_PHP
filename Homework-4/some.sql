DROP DATABASE IF EXISTS EKhwDataBase;
CREATE DATABASE EKhwDataBase;

USE EKhwDataBase;

DROP TABLE IF EXISTS images;
CREATE TABLE images(
    id SERIAL,
    image_path VARCHAR(255),
    image_name VARCHAR(255)
);

INSERT INTO images (image_path, image_name) 
    VALUES 
        ('images/img1.jpg', 'snowball'),
        ('images/img2.jpg', 'lights'),
        ('images/img3.jpg', 'Christmas tree'),
        ('images/img4.jpg', 'Ice')
;