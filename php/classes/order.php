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

}

?>