<?php
//order classification class ($order_id, $order_date, $order_status, $order_total, $order_tax, $order_subtotal, $order_shipping, $order_discount, $order_payment, $order_payment_status, $order_payment_date, $order_payment_transaction, $order_payment_amount, $order_payment_method, $order_payment_currency)
class Order
{
    //declare variables
    public $order_id;
    public $order_date;
    public $order_status;
    public $order_total;
    public $order_tax;
    public $order_subtotal;
    public $order_shipping;
    public $order_discount;
    public $order_payment;
    public $order_payment_status;
    public $order_payment_date;
    public $order_payment_transaction;
    public $order_payment_amount;
    public $order_payment_method;
    public $order_payment_currency;
    //get order function with mysql
    public function getOrder($order_id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return true;
        }
        else {
            return false;
        }
    }
    //set order function 
    public function setOrder($order_id, $order_date, $order_status, $order_total, $order_tax, $order_subtotal, $order_shipping, $order_discount, $order_payment, $order_payment_status, $order_payment_date, $order_payment_transaction, $order_payment_amount, $order_payment_method, $order_payment_currency)
    {
        $this->order_id = $order_id;
        $this->order_date = $order_date;
        $this->order_status = $order_status;
        $this->order_total = $order_total;
        $this->order_tax = $order_tax;
        $this->order_subtotal = $order_subtotal;
        $this->order_shipping = $order_shipping;
        $this->order_discount = $order_discount;
        $this->order_payment = $order_payment;
        $this->order_payment_status = $order_payment_status;
        $this->order_payment_date = $order_payment_date;
        $this->order_payment_transaction = $order_payment_transaction;
        $this->order_payment_amount = $order_payment_amount;
        $this->order_payment_method = $order_payment_method;
        $this->order_payment_currency = $order_payment_currency;
    }
    //search order function with mysql
    public function searchOrder($order_id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
        $result = mysqli_query($this->con, $sql);
        $row = mysqli_fetch_array($result);
        $data = $row[0];
        if ($data > 1) {
            return true;
        }
        else {
            return false;
        }
    }

    //getter and setter for order function
    public function getOrderId()
    {
        return $this->order_id;
    }
    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }
    public function getOrderDate()
    {
        return $this->order_date;
    }
    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;
    }
    public function getOrderStatus()
    {
        return $this->order_status;
    }
    public function setOrderStatus($order_status)
    {
        $this->order_status = $order_status;
    }
    public function getOrderTotal()
    {
        return $this->order_total;
    }
    public function setOrderTotal($order_total)
    {
        $this->order_total = $order_total;
    }
    public function getOrderTax()
    {
        return $this->order_tax;
    }
    public function setOrderTax($order_tax)
    {
        $this->order_tax = $order_tax;
    }
    public function getOrderSubtotal()
    {
        return $this->order_subtotal;
    }
    public function setOrderSubtotal($order_subtotal)
    {
        $this->order_subtotal = $order_subtotal;
    }
    public function getOrderShipping()
    {
        return $this->order_shipping;
    }
    public function setOrderShipping($order_shipping)
    {
        $this->order_shipping = $order_shipping;
    }
    public function getOrderDiscount()
    {
        return $this->order_discount;
    }
    public function setOrderDiscount($order_discount)
    {
        $this->order_discount = $order_discount;
    }
    public function getOrderPayment()
    {
        return $this->order_payment;
    }
    public function setOrderPayment($order_payment)
    {
        $this->order_payment = $order_payment;
    }
    public function getOrderPaymentStatus()
    {
        return $this->order_payment_status;
    }
    public function setOrderPaymentStatus($order_payment_status)
    {
        $this->order_payment_status = $order_payment_status;
    }
    public function getOrderPaymentDate()
    {
        return $this->order_payment_date;
    }
    public function setOrderPaymentDate($order_payment_date)
    {
        $this->order_payment_date = $order_payment_date;
    }
    public function getOrderPaymentTransaction()
    {
        return $this->order_payment_transaction;
    }
    public function setOrderPaymentTransaction($order_payment_transaction)
    {
        $this->order_payment_transaction = $order_payment_transaction;
    }
    public function getOrderPaymentAmount()
    {
        return $this->order_payment_amount;
    }
    public function setOrderPaymentAmount($order_payment_amount)
    {
        $this->order_payment_amount = $order_payment_amount;
    }
    public function getOrderPaymentMethod()
    {
        return $this->order_payment_method;
    }
    public function setOrderPaymentMethod($order_payment_method)
    {
        $this->order_payment_method = $order_payment_method;
    }
    public function getOrderPaymentCurrency()
    {
        return $this->order_payment_currency;
    }
    public function setOrderPaymentCurrency($order_payment_currency)
    {
        $this->order_payment_currency = $order_payment_currency;
    }

    //delete order function with mysql
    public function deleteOrder($order_id)
    {
        $sql = "DELETE FROM orders WHERE order_id = '$order_id'";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
    //update order function with mysql
    public function updateOrder($order_id, $order_date, $order_status, $order_total, $order_tax, $order_subtotal, $order_shipping, $order_discount, $order_payment, $order_payment_status, $order_payment_date, $order_payment_transaction, $order_payment_amount, $order_payment_method, $order_payment_currency)
    {
        $sql = "UPDATE orders SET order_id = '$order_id', order_date = '$order_date', order_status = '$order_status', order_total = '$order_total', order_tax = '$order_tax', order_subtotal = '$order_subtotal', order_shipping = '$order_shipping', order_discount = '$order_discount', order_payment = '$order_payment', order_payment_status = '$order_payment_status', order_payment_date = '$order_payment_date', order_payment_transaction = '$order_payment_transaction', order_payment_amount = '$order_payment_amount', order_payment_method = '$order_payment_method', order_payment_currency = '$order_payment_currency' WHERE order_id = '$order_id'";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
//mysql insert order function
    public function insertOrder($order_id, $order_date, $order_status, $order_total, $order_tax, $order_subtotal, $order_shipping, $order_discount, $order_payment, $order_payment_status, $order_payment_date, $order_payment_transaction, $order_payment_amount, $order_payment_method, $order_payment_currency)
    {
        $sql = "INSERT INTO orders (order_id, order_date, order_status, order_total, order_tax, order_subtotal, order_shipping, order_discount, order_payment, order_payment_status, order_payment_date, order_payment_transaction, order_payment_amount, order_payment_method, order_payment_currency) VALUES ('$order_id', '$order_date', '$order_status', '$order_total', '$order_tax', '$order_subtotal', '$order_shipping', '$order_discount', '$order_payment', '$order_payment_status', '$order_payment_date', '$order_payment_transaction', '$order_payment_amount', '$order_payment_method', '$order_payment_currency')";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }
    //mysql select order function
    public function selectOrder($order_id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    //mysql select all order function
    public function selectAllOrder()
    {
        $sql = "SELECT * FROM orders";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    //mysql select order by order id function
    public function selectOrderByOrderId($order_id)
    {
        $sql = "SELECT * FROM orders WHERE order_id = '$order_id'";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    //mysql select order by order date function
    public function selectOrderByOrderDate($order_date)
    {
        $sql = "SELECT * FROM orders WHERE order_date = '$order_date'";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    //mysql select order by order status function
    public function selectOrderByOrderStatus($order_status)
    {
        $sql = "SELECT * FROM orders WHERE order_status = '$order_status'";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    //mysql seach order by order name function
    public function searchOrderByOrderName($order_name)
    {
        $sql = "SELECT * FROM orders WHERE order_name LIKE '%$order_name%'";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    //mysql seach order by order date function
    public function searchOrderByOrderDate($order_date)
    {
        $sql = "SELECT * FROM orders WHERE order_date LIKE '%$order_date%'";
        $result = mysqli_query($this->con, $sql);
        return $result;
    }
    

}
//sql for create order table 

// $sql = "CREATE TABLE orders (    
//     order_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     order_date TIMESTAMP,
//     order_status VARCHAR(30) NOT NULL,
//     order_total DECIMAL(10,2) NOT NULL,
//     order_tax DECIMAL(10,2) NOT NULL,
//     order_subtotal DECIMAL(10,2) NOT NULL,
//     order_shipping DECIMAL(10,2) NOT NULL,
//     order_discount DECIMAL(10,2) NOT NULL,
//     order_payment VARCHAR(30) NOT NULL,
//     order_payment_status VARCHAR(30) NOT NULL,
//     order_payment_date TIMESTAMP,
//     order_payment_transaction VARCHAR(30) NOT NULL,
//     order_payment_amount DECIMAL(10,2) NOT NULL,
//     order_payment_method VARCHAR(30) NOT NULL,
//     order_payment_currency VARCHAR(30) NOT NULL
//     )";

?>