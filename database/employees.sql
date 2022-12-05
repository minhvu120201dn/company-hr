CREATE TABLE employees(
    email VARCHAR(255) PRIMARY KEY,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255) DEFAULT NULL,
    last_name VARCHAR(255) NOT NULL,
    avatar VARCHAR(255) DEFAULT NULL,
    birth DATE NOT NULL,
    department VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    phone_number VARCHAR(255) NOT NULL,
    notes TEXT DEFAULT NULL
);

/* email: admin@gmail.com password: admin */
INSERT INTO employees
VALUES ('admin@gmail.com', '$2y$10$Ttm.9G8PJ2DhDVAyzDsnh.zihfpTej9KQtBlMGzb4.03F8opNF7MS', 'admin', 'admin', 'admin', NULL, '2022-1-1', 'admin', 'admin', '1234567890', NULL);
