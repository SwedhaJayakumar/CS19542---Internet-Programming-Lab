
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $courseId = $_POST['courseId'];

    // Initialize cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the course to the cart
    if (!in_array($courseId, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $courseId;
        echo json_encode(['status' => 'success', 'message' => 'Course added to cart.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Course is already in the cart.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>
