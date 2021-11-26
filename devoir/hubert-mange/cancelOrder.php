<?php

session_start();

if (isset($_POST['orderId']) && isset($_SESSION['orders']) && isset($_SESSION['orders'][$_POST['orderId']])) {
    unset($_SESSION['orders'][$_POST['orderId']]);
}

header('Location: orders.php');
exit;
