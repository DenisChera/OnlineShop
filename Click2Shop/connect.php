<?php
require ('database/DBController.php');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$adress = $_POST['adress'];
$phone_number = $_POST['phone_number'];
$conn = new mysqli('localhost','root','','click2shop');
$errors = array();
if(empty($username)){
    array_push($errors, "Acest camp este obligatoriu!");
}
if(empty($email)){
    array_push($errors, "Acest camp este obligatoriu!");
}
if(empty($password)){
    array_push($errors, "Acest camp este obligatoriu!");
}
if(empty($adress)){
    array_push($errors, "Acest camp este obligatoriu!");
}
if($password!=$confirm_password){
    array_push($errors, "Cele 2 parole trebuie sa fie identice.");
}
if(empty($phone_number)){
    array_push($errors, "Acest camp este obligatoriu!");
}



    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $s= "select * from client where username = '$username'";

        $result = mysqli_query($conn, $s);
        $num = mysqli_num_rows($result);
        if($num>=1){
            echo "Exista deja un utilizator cu acest nume!";

        }
        else {
            $stmt = $conn->prepare("insert into client(username, email, password, adress, phone_number ) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi", $username, $email, $password, $adress, $phone_number);
            $stmt->execute();


            header("Location:" . 'cont.php');
            $stmt->close();
            $conn->close();
        }
    }

?>