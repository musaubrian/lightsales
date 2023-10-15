-- Define the User table for authentication
CREATE TABLE IF NOT EXISTS User (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email TEXT NOT NULL UNIQUE,
    password TEXT NOT NULL
);

-- Define the Buyer table with a reference to the User table
CREATE TABLE IF NOT EXISTS Buyer (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    userID TEXT NOT NULL,
    FOREIGN KEY (userID) REFERENCES User(id)
);

-- Define the Seller table with a reference to the User table
CREATE TABLE IF NOT EXISTS Seller (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    userID TEXT NOT NULL,
    FOREIGN KEY (userID) REFERENCES User(id)
);

-- Define the Purchase table with references to the Buyer and Product tables
CREATE TABLE IF NOT EXISTS Purchase (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    buyerID TEXT NOT NULL,
    productID TEXT NOT NULL,
    amount INTEGER NOT NULL DEFAULT 1,
    FOREIGN KEY (buyerID) REFERENCES Buyer(id),
    FOREIGN KEY (productID) REFERENCES Product(id)
);

-- Define the Product table with a reference to the Seller table
CREATE TABLE IF NOT EXISTS Product (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    details TEXT,
    category TEXT NOT NULL,
    sellerID TEXT NOT NULL,
    FOREIGN KEY (sellerID) REFERENCES Seller(id)
);
