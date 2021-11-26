<?php
session_start();

if (isset($_POST['orderId']) && isset($_SESSION['orders']) && isset($_SESSION['orders'][$_POST['orderId']]))
{
    $currentOrder = $_SESSION['orders'][$_POST['orderId']];

    if (!isset($_SESSION['turnover'])) {
        $_SESSION['turnover'] = $currentOrder['price'] * $currentOrder['quantity'];
    } else {
        $_SESSION['turnover'] += $currentOrder['price'] * $currentOrder['quantity'];
    }

    unset($_SESSION['orders'][$_POST['orderId']]);
}

header('Location: orders.php');
exit;
