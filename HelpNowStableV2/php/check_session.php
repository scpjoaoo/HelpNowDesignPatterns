<?php
session_start();

$response = array(
    'logged_in' => false,
    'user_name' => ''
);

if (isset($_SESSION['user_id'])) {
    $response['logged_in'] = true;
    $response['user_name'] = $_SESSION['user_name'];
}

echo json_encode($response);
?>
