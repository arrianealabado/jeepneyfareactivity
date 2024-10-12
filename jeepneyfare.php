<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeepney Fare Calculator</title>
</head>
<body>

    <h1>Jeepney Fare Calculator</h1>

    <form action="calculate.php" method="post">
        <label for="distance">Distance (in km):</label>
        <input type="number" id="distance" name="distance" step="0.01" min="0" required><br><br>

        <label for="passengerType">Passenger Type:</label>
        <select id="passengerType" name="passengerType" required>
            <option value="regular">Regular</option>
            <option value="student/elderly">Student/Elderly</option>
        </select><br><br>

        <input type="submit" value="Calculate Fare">
    </form>

    <?php
    
    if (isset($_GET['fare'])) {
        echo "<h2>Total Fare: PHP " . number_format($_GET['fare'], 2) . "</h2>";
    }
    ?>

</body>
</html>
