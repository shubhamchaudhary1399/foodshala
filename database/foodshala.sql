SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

-- DROP TABLE cust_orders;
-- DROP TABLE fooditems;
-- DROP TABLE customers;
-- DROP TABLE restaurants;

CREATE TABLE customers (
  id int(11) NOT NULL,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NULL,
  contact varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  preference varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE restaurants (
  id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  contact varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE fooditems (
  id int(11) NOT NULL,
  rest_id int(11) NOT NULL,
  name varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  type varchar(255) NOT NULL,
  img varchar(255) NOT NULL,
  best_price decimal(8,2)	NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE cust_orders (
  id int(11) NOT NULL,
  cust_id int(11) NOT NULL,
  food_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE customers
  ADD PRIMARY KEY (id);

ALTER TABLE restaurants
  ADD PRIMARY KEY (id);

ALTER TABLE fooditems
  ADD PRIMARY KEY (id);

ALTER TABLE cust_orders
  ADD PRIMARY KEY (id);

ALTER TABLE customers
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE restaurants
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE fooditems
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE cust_orders
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE fooditems
  ADD CONSTRAINT fk_restID FOREIGN KEY (rest_id) REFERENCES restaurants (id);

ALTER TABLE cust_orders
  ADD CONSTRAINT fk_custID FOREIGN KEY (cust_id) REFERENCES customers (id),
  ADD CONSTRAINT fk_foodID FOREIGN KEY (food_id) REFERENCES fooditems (id);
COMMIT;
