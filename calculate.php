<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distance = floatval($_POST['distance']);
    $passengerType = $_POST['passengerType'];

    
    $baseFare = 13.00;
    $additionalRate = 1.75;
    $discount = 0.20; 

    
    if ($distance <= 5) {
        $fare = $baseFare;
    } else {
        $fare = $baseFare + (($distance - 5) * $additionalRate);
    }

    
    if ($passengerType == 'student/elderly') {
        $fare -= $fare * $discount;
    }

    
    header("Location: jeepneyfare.php?fare=" . urlencode($fare));
    exit;
} else {
    
    header("Location: jeepneyfare.php");
    exit;
}
