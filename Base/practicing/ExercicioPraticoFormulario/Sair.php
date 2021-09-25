<?php
session_start();


if ($_SESSION['nome']) {
    session_destroy();
    header('Location: login.php');
    exit;
} else {
    header('Location: login.php');
    exit;
}
