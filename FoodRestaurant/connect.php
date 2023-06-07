<?php
try {
    $conn = new mysqli("localhost", "root", "", "project");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}

function addOrder($name, $email, $phone, $food, $address) {
    global $conn;

    $stmt = $conn->prepare("INSERT INTO orders(`Name`, `Email`, `Phone`, `Food`, `Address`)VALUES (?, ?, ?, ?, ?);");
    $stmt->bind_param("sssss", $name, $email, $phone, $food, $address);
    return $stmt->execute();
}

if (isset($_POST['ordernow'])) {
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    $food = $_POST['food'];
    $address = $_POST['address'];

    if (addOrder($name, $email, $phone, $food, $address)) {
        echo 'Your order has been sent successfully';

        echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Food</th>
                <th>Address</th>
            </tr>";

        echo "<tr>
            <td>$name</td>
            <td>$email</td>
            <td>$phone</td>
            <td>$food</td>
            <td>$address</td>
            </tr>";
            
        echo "</table>";
    } else {
        echo 'Try again';
    }
}
//$conn->close();
?>
