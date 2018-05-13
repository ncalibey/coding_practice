CREATE TABLE customers (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name CHAR(50) NOT NULL,
  address CHAR(100) NOT NULL,
  city CHAR(30) NOT NULL
);

CREATE TABLE orders (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  customer_id INT UNSIGNED NOT NULL,
  amount FLOAT(6,2),
  date DATE NOT NULL,
  FOREIGN KEY (customer_id) REFERENCES customers(id)
);

CREATE TABLE books (
  isbn CHAR(13) NOT NULL PRIMARY KEY,
  author CHAR(50),
  title CHAR(100),
  price FLOAT(4,2)
);

CREATE TABLE order_items (
  order_id INT UNSIGNED NOT NULL,
  isbn CHAR(13) NOT NULL,
  quantity TINYINT UNSIGNED,
  PRIMARY KEY (order_id, isbn),
  FOREIGN KEY (order_id) REFERENCES orders(id),
  FOREIGN KEY (isbn) REFERENCES books(isbn)
);

CREATE TABLE book_reviews (
  isbn CHAR(13) NOT NULL PRIMARY KEY,
  review TEXT,
  FOREIGN KEY (isbn) REFERENCES books(isbn)
);
