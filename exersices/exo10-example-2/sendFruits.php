<?php

session_start();

if (isset($_POST['fruit']))
{
    $_SESSION['fruits'][] = $_POST['fruit'];
}

header('Location: exo10.php');
exit;