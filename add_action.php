<?php

require 'funcs.php';

if (!isset($_POST['submit'])) {
	header('Location: index.php?msg=Err1: An error occured. Please try again later.');
	exit();
}

$cust_name = $_POST['cust_name'];
$cust_addr = $_POST['cust_addr'];
$cust_phone_num = $_POST['cust_phone_num'];
$item_bought = $_POST['item_bought'];
$item_sold = $_POST['item_sold'];
$unit_price = $_POST['unit_price'];
$total_amt = $_POST['total_amt'];
$total_expen = $_POST['total_expen'];
$date = $_POST['date'];
$qty = $_POST['qty'];

$db_conn = db_conn();

$query = 'INSERT INTO `comp_sales_sys`
(`cust_name`, `cust_addr`, `cust_phone_num`, `item_bought`, `item_sold`, `unit_price`, `total_amt`, `total_expen`, `date`, `qty`)
VALUES ("' . $cust_name . '", "' . $cust_addr . '", "' . $cust_phone_num . '", "' . $item_bought . '", "' . $item_sold . '",
"' . $unit_price . '", "' . $total_amt . '", "' . $total_expen . '", "' . $date . '", "' . $qty . '")';

if (!(mysqli_query($db_conn, $query))) {
    header('Location: index.php?msg=Err2: The record could not be added to the database. Please try again later.');
} else {
	header('Location: index.php?msg=The record has been added to the database.');
}

exit();
