
INSERT INTO `products`(`id`, `name`, `price`, `stock`, `description`, `category`, `created_at`) VALUES 
('1','Kit Maiko',30.45,5,'Estuche con productos Maiko','accesorio','2023-02-04 13:34:00'),
('2','Colorete',15.00,10,'Colorete con gama de tonos fríos','maquillaje','2023-02-04 13:34:00'),
('3','Pintalabios',76.45,2,'Pintalabios de calidad','maquillaje','2023-02-04 13:34:00');

INSERT INTO `users`(`id`, `username`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`) 
VALUES (2,'normalUser','normalUser@gmail.com',NULL,'user','user',NULL,'2023-02-05 11:34:00');

SELECT * FROM `products`;