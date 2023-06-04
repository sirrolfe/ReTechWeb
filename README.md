# ReTechWeb

Query untul SQL Database jika ingin coba:

CREATE TABLE Users (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    FullName VARCHAR(100),
    Email VARCHAR(100) UNIQUE,
    PhoneNumber VARCHAR(15),
    City VARCHAR(50),
    PasswordHash VARBINARY(256)
);

Terus kasih nama testing_db
