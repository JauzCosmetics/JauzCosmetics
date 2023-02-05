INSERT INTO `products`( `name`, `price`, `stock`, `description`, `category_id`, `created_at`) VALUES 
('Kit Maiko',30.45,5,'Estuche con productos Maiko','2','2023-02-04 13:34:00'),
('Colorete',15.00,10,'Colorete con gama de tonos fríos','1','2023-02-04 13:34:00'),
('Pintalabios',76.45,2,'Pintalabios de calidad','2','2023-02-04 13:34:00');

INSERT INTO `users`(`username`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`) 
VALUES ('normalUser','normalUser@gmail.com',NULL,'user','user',NULL,'2023-02-05 11:34:00');

SELECT * FROM `products`;