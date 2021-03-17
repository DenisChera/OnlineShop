<?php


require('database/DBController.php');
$username_login = $_POST['username_login'];
$password_login = $_POST['password_login'];
$conn = new mysqli('localhost', 'root', '', 'click2shop');

if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $s = "select * from client where username = '$username_login' &&  password = '$password_login'";

    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        header("Location:" . 'index1.php');

    } else {
        $stmt = $conn->prepare("insert into client(username, email, password, adress, phone_number ) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $username, $email, $password, $adress, $phone_number);
        $stmt->execute();


        header("Location:" . 'cont.php');
        $stmt->close();
        $conn->close();
    }
}
?>

