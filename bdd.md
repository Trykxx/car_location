```sql
mysql -u root;

CREATE DATABASE car_location;

USE car_location;

CREATE table car(
    id INT PRIMARY KEY AUTO_INCREMENT,
    modele VARCHAR(255),
    description TEXT,
    prix DECIMAL (10,2),
    img_path VARCHAR(255)
);

INSERT INTO car (modele, description, prix, img_path) VALUES
('Tesla Model S', 'Voiture électrique haut de gamme avec une autonomie exceptionnelle.', 199.99, 'Tesla_Model_S.jpg'),
('BMW i8', 'Voiture de sport hybride avec des performances impressionnantes.', 349.00, 'BMW_i8.jpg'),
('Audi A6', 'Berline de luxe avec un intérieur spacieux et confortable.', 149.00, 'Audi_A6.jpg'),
('Mercedes-Benz C-Class', 'Compacte de luxe avec des technologies avancées et un design élégant.', 139.00, 'Mercedes_Benz_C_Class.jpg'),
('Ford Mustang', 'Voiture de sport iconique avec un moteur puissant et un design agressif.', 159.95, 'Ford_Mustang.jpg'),
('Chevrolet Camaro', 'Voiture de sport américaine avec un style musclé et des performances robustes.', 125.00, 'Chevrolet_Camaro.jpg'),
('Honda Civic', 'Voiture compacte fiable avec une excellente économie de carburant.', 60.00, 'Honda_Civic.jpg'),
('Toyota Corolla', 'Voiture compacte populaire connue pour sa fiabilité et son économie de carburant.', 55.00, 'Toyota_Corolla.jpg'),
('Porsche 911', 'Voiture de sport de luxe avec une performance exceptionnelle et un design emblématique.', 299.99, 'Porsche_911.jpg'),
('Lamborghini Aventador', 'Supercar italienne avec un moteur V12 et des performances de pointe.', 999.00, 'Lamborghini_Aventador.jpg');

CREATE table user(
    id INT PRIMARY KEY AUTO_INCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    statut BOOLEAN DEFAULT FALSE
);

INSERT INTO user (pseudo, email, mot_de_passe, statut) VALUES ('admin', 'admin@gmail.com', '123456', TRUE),('user', 'user@gmail.com', '123456', FALSE) ;
```
