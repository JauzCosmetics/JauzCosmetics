INSERT INTO `categories`( `name`,`created_at`) VALUES 
('Maquillaje','2023-02-05 18:15:00'),
('Accesorio','2023-02-05 18:15:00');

INSERT INTO `products`(`id`, `name`, `price`, `stock`, `description`, `category_id`, `created_at`) VALUES 
('1','Kit Maiko',30.45,5,'Estuche con productos Maiko','2','2023-02-04 13:34:00'),
('2','Colorete',15.00,10,'Colorete con gama de tonos fríos','1','2023-02-04 13:34:00'),
('3','Pintalabios',76.45,2,'Pintalabios de calidad','1','2023-02-04 13:34:00');

INSERT INTO `users`(`id`, `username`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`) 
VALUES (2,'normalUser','normalUser@gmail.com',NULL,'user','user',NULL,'2023-02-05 11:34:00');

SELECT * FROM `products`;