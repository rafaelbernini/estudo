<?php
session_start();

if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_level'] === 'admin') {
        header('Location: admin.php');
    } else {
        header('Location: user.php');
    }
}

include('login_form.php');
?>