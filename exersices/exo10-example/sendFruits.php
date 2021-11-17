<?php

session_start();

if (isset($_POST['fruit']))
{
    $_SESSION['myfruit'] = $_POST['fruit'];
}

header('Location: exo10.php');
exit;