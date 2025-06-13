<?php
session_start();

$minerals = json_decode(file_get_contents('minerals.json'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $itemId = $_POST['id'];
    
    
    foreach ($minerals as $mineral) {
        if ($mineral['id'] === $itemId) {
            
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }

           
            if (isset($_SESSION['cart'][$itemId])) {
                $_SESSION['cart'][$itemId]['quantity'] += 1;
            } else {
                $_SESSION['cart'][$itemId] = [
                    'title' => $mineral['title'],
                    'price' => $mineral['price'],
                    'photo' => $mineral['photo'],
                    'quantity' => 1
                ];
            }
            break;
        }
    }
}


header("Location: cart.php");
exit;
?>
