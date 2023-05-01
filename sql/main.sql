CREATE TABLE `restaurant` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `metadata` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`));

-- sample data
INSERT INTO `restaurant` (`id`, `name`, `address`, `description`, `image`, `metadata`) VALUES (NULL, 'Restaurant 1', 'Address 1', 'Description 1', 'Image 1', 'Metadata 1');
INSERT INTO `restaurant` (`id`, `name`, `address`, `description`, `image`, `metadata`) VALUES (NULL, 'Restaurant 2', 'Address 2', 'Description 2', 'Image 2', 'Metadata 2');

-----------------------------------------------------------------------------
CREATE TABLE `user` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `type` varchar(255) NOT NULL,
    `status` varchar(255) NOT NULL,
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `deleted_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
    )


-- sample data user 
INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
 (NULL, 'admin', 'admin', 'admin@gmail.com', 'admin', 'active', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL);


-----------------------------------------------------------------------------
CREATE TABLE `food` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` varchar(255) NOT NULL,
        `price` varchar(255) NOT NULL,
        `description` varchar(255) NOT NULL,
        `image` varchar(255) NOT NULL,
        `metadata` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- sample data food
INSERT INTO `food` (`id`, `name`, `price`, `description`, `image`, `metadata`)  VALUES (NULL, 'Food 1', '10000', 'Description 1', 'Image 1', 'Metadata 1');
INSERT INTO `food` (`id`, `name`, `price`, `description`, `image`, `metadata`)  VALUES (NULL, 'Food 2', '20000', 'Description 2', 'Image 2', 'Metadata 2');

-----------------------------------------------------------------------------------------
CREATE TABLE orders (    
    order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    order_date TIMESTAMP,
    order_status VARCHAR(30) NOT NULL,
    order_total DECIMAL(10,2) NOT NULL,
    order_tax DECIMAL(10,2) NOT NULL,
    order_subtotal DECIMAL(10,2) NOT NULL,
    order_shipping DECIMAL(10,2) NOT NULL,
    order_discount DECIMAL(10,2) NOT NULL,
    order_payment VARCHAR(30) NOT NULL,
    order_payment_status VARCHAR(30) NOT NULL,
    order_payment_date TIMESTAMP,
    order_payment_transaction VARCHAR(30) NOT NULL,
    order_payment_amount DECIMAL(10,2) NOT NULL,
    order_payment_method VARCHAR(30) NOT NULL,
    order_payment_currency VARCHAR(30) NOT NULL
    )
--smpale data orders
INSERT INTO `orders` (`order_id`, `order_date`, `order_status`, `order_total`, `order_tax`, `order_subtotal`, `order_shipping`, `order_discount`, `order_payment`, `order_payment_status`, `order_payment_date`, `order_payment_transaction`, `order_payment_amount`, `order_payment_method`, `order_payment_currency`) VALUES (NULL, CURRENT_TIMESTAMP, 'pending', '10000', '1000', '9000', '0', '0', 'pending', 'pending', CURRENT_TIMESTAMP, 'pending', '0', 'pending', 'pending');
INSERT INTO `orders` (`order_id`, `order_date`, `order_status`, `order_total`, `order_tax`, `order_subtotal`, `order_shipping`, `order_discount`, `order_payment`, `order_payment_status`, `order_payment_date`, `order_payment_transaction`, `order_payment_amount`, `order_payment_method`, `order_payment_currency`) VALUES (NULL, CURRENT_TIMESTAMP, 'pending', '20000', '2000', '18000', '0', '0', 'pending', 'pending', CURRENT_TIMESTAMP, 'pending', '0', 'pending', 'pending');