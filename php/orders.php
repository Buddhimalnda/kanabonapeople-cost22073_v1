<?php

/*
sql create database for this table
CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `order_date` datetime NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_total` float NOT NULL,
  `order_tax` float NOT NULL,
  `order_subtotal` float NOT NULL,
  `order_shipping` float NOT NULL,
  `order_discount` float NOT NULL,
  `order_payment` varchar(255) NOT NULL,
  `order_payment_status` varchar(255) NOT NULL,
  `order_payment_date` datetime NOT NULL,
  `order_payment_transaction` varchar(255) NOT NULL,
  `order_payment_amount` float NOT NULL,
  `order_payment_method` varchar(255) NOT NULL,
  `order_payment_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);
 */



?>