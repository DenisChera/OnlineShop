<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Click2Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="swiper.min.css"/>
    <link rel="stylesheet" href="HTML Template/style.css">
    <script type="text/javascript" src="swiper.min.js"></script>
    <script src="transition2.js"></script>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
require ('database/Produs.php');

require ('database/DBController.php');
$db = new DBController();
$produs = new Produs($db);
?>
<div class="header">
    <div class="navbar">
        <nav>
            <div class="logo">
                <img src="HTML Template/imagini/c2s-logo.png"></div>
            <ul>
                <li><a href="index.php">Acasa</a></li>
                <li><a href="produse.php">Produse</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="favorite.php">Favorite</a></li>
                <li><a class="active" href="#">Contul meu</a></li>
                <li><a href="cos_cumparaturi.php"><img src="HTML Template/imagini/cart.png" width="50px" height="30px"><span class="cos"><?php if (!empty($produs)) {
                                echo count($produs->getData('cos'));
                            } ?> buc.</span></a></li>
            </ul>

        </nav>

    </div>



</div>




<script type="text/javascript" src="swiper.min.js"></script>
<script src="transition2.js"></script>



<!------ account- page---------->

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Intra in cont</span>
                        <span onclick="register()">Inregistreaza-te</span>
                        <hr id="Indicator">
                    </div>

                    <form id="LoginForm" action="validate_login.php" method="post" onsubmit="return Validate_login()" name="vform2">
                        <div id="username_login_error" class="val_error"></div>

                        <input type="text" placeholder="Nume utilizator" name="username_login">

                        <input type="password" placeholder="Parola" name="password_login">

                        <button type="submit" class="btn2">Conecteaza-te</button>
                        <br>
                        <div class="pass">
                        <a href="">Ai uitat parola?</a>
                    </div>
                    </form>

                    <form id="RegForm" action="connect.php" method="post" onsubmit="return Validate()" name="vform">

                        <input type="text" placeholder="Nume utilizator" name="username">

                        <div id="username_error" class="val_error"></div>


                        <input type="email" placeholder="Email" name="email">
                        <div id="email_error" class="val_error"></div>

                        <input type="password" placeholder="Parola" name="password">


                        <input type="password" placeholder="Confirma Parola" name="confirm_password">
                        <div id="password_error" class="val_error"></div>

                        <div id="confirm_password_error" class="val_error"></div>

                        <input type="text" placeholder="Adresa : Localitate, Strada, Nr., Detalii suplimentare " name="adress">
                        <div id="adress_error" class="val_error"></div>

                        <input type="number" placeholder="Nr. de telefon" name="phone_number">
                        <div id="phone_number_error" class="val_error"></div>
                        <button type="submit" class="btn2">Inregistreaza-te</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<!--------footer---------->
<div class="mutare4">
    <div class="footer-cont">
        <div class="container_new_cont">
            <div class="row">
                <div class="footer-cont-col-1">
                    <h3>Descarca aplicatia noastra</h3>
                    <p>Descarca aplicatia pentru Android si ios</h3>
                    <div class="app-logo">
                        <img src="HTML Template/imagini/play-store.png">
                        <img src="HTML Template/imagini/app-store.png">

                    </div>
                </div>
                <div class="footer-cont-col-2">
                    <img src="HTML Template/imagini/c2s-logo.png">
                    <p>Din pasiune pentru tehnologie</p>
                </div>
                <div class="footer-cont-col-3">
                    <h3>Comenzi si livrare</h3>
                    <ul>
                        <li>Contul meu</li>
                        <li>Cum comand online</li>
                        <li>Livrarea comenzilor</li>
                        <li>Modalitati de plata</li>

                </div>
                <div class="footer-cont-col-4">
                    <h3>Urmareste-ne</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>

                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 - Denis Chera</p>

        </div>
    </div>
</div>

<script>

    var $slides = $('.slides');
    var $slide = $('.slide1');
    var count = 1;

    $(document).ready(function () {

        setInterval(function () {

            $slides.animate({ 'margin-left': '-=68vw' }, 1200, function () {

                count++;
                if (count === 4) {
                    $slides.css("margin-left", 0);
                    count = 1;
                }

            });
        }, 4000);
    });

</script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        $(".like").click(function(){
            $(this).toggleClass("heart");
        });
    });
</script>


<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].onclick = function(){
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function(){
        ProductImg.src = SmallImg[1].src;
    }

    SmallImg[2].onclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }

</script>


<!------js for toggle Form------>

<script>

    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");

    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }

    function login(){
        RegForm.style.transform = "translateX(450px)";
        LoginForm.style.transform = "translateX(450px)";
        Indicator.style.transform = "translateX(-70px)";
    }

</script>

</body>

</html>
<script>
    var username = document.forms["vform"]["username"];
    var username_login = document.forms["vform2"]["username_login"];
    var email = document.forms["vform"]["email"];
    var password = document.forms["vform"]["password"];
    var password_login = document.forms["vform2"]["password_login"];
    var confirm_password = document.forms["vform"]["confirm_password"];
    var adress = document.forms["vform"]["adress"];
    var phone_number = document.forms["vform"]["phone_number"];

    var username_error = document.getElementById("username_error");
    var username_login_error = document.getElementById("username_login_error");
    var email_error = document.getElementById("email_error");
    var password_error = document.getElementById("password_error");
    var password_login_error = document.getElementById("password_login_error");
    var confirm_password_error = document.getElementById("confirm_password_error");
    var adress_error = document.getElementById("adress_error");
    var phone_number_error = document.getElementById("phone_number_error");

    username.addEventListener("blur", usernameVerify, true);
    username_login.addEventListener("blur", username_loginVerify, true);
    email.addEventListener("blur", emailVerify, true);
    password.addEventListener("blur", passwordVerify, true);
    password_login.addEventListener("blur", password_loginVerify, true);
    confirm_password.addEventListener("blur", confirm_passwordVerify, true);
    adress.addEventListener("blur", adressVerify, true);
    phone_number.addEventListener("blur", phone_numberVerify, true);

    function Validate() {
        if (username.value == "") {
            username.style.border = "1px solid red";
            username_error.textContent = "Acest camp este obligatoriu!";
            username.focus();
            return false;
        }



        if (email.value == "") {
            email.style.border = "1px solid red";
            email_error.textContent = "Acest camp este obligatoriu!";
            email.focus();
            return false;
        }

        if (password.value == "") {
            password.style.border = "1px solid red";
            password_error.textContent = "Acest camp este obligatoriu!";
            password.focus();
            return false;
        }



        if(password.value != confirm_password.value){
            confirm_password.style.border = "1px solid red";
            confirm_password.style.border = "1px solid red";
            confirm_password_error.innerHTML = "Cele 2 parole trebuie sa fie identice!";
            return false;
        }


        if (adress.value == "") {
            adress.style.border = "1px solid red";
            adress_error.textContent = "Acest camp este obligatoriu!";
            adress.focus();
            return false;
        }

        if (phone_number.value == "") {
            phone_number.style.border = "1px solid red";
            phone_number_error.textContent = "Acest camp este obligatoriu!";
            phone_number.focus();
            return false;
        }
    }
    function usernameVerify(){
        if(username.value != ""){
            username.style.border = "1px solid #5E6E66";
            username_error.innerHTML = "";
            return true;
        }

    }

    function emailVerify(){
        if(email.value != ""){
            email.style.border = "1px solid #5E6E66";
            email_error.innerHTML = "";
            return true;
        }

    }

    function passwordVerify(){
        if(password.value != ""){
            password.style.border = "1px solid #5E6E66";
            password_error.innerHTML = "";
            return true;
        }

    }


    function confirm_passwordVerify(){
        if(confirm_password.value != ""){
            confirm_password.style.border = "1px solid #5E6E66";
            confirm_password_error.innerHTML = "";
            return true;
        }

    }

    function adressVerify(){
        if(adress.value != ""){
            adress.style.border = "1px solid #5E6E66";
            adress_error.innerHTML = "";
            return true;
        }

    }

    function phone_numberVerify(){
        if(phone_number.value != ""){
            phone_number.style.border = "1px solid #5E6E66";
            phone_number_error.innerHTML = "";
            return true;
        }

    }





    function Validate_login() {
        if(username_login.value == "" && password_login.value == ""){
            password_login.style.border = "1px solid red";
            username_login.style.border = "1px solid red";
            username_login.focus();
            username_login_error.textContent = "Toate campurile sunt obligatorii";
            return false;
        }

        if (username_login.value == "") {
            username_login.style.border = "1px solid red";
            username_login_error.textContent = "Toate campurile sunt obligatorii!";
            username_login.focus();
            return false;
        }
        else if (password_login.value == "") {
            password_login.style.border = "1px solid red";
            username_login_error.textContent = "Toate campurile sunt obligatorii";
            password_login.focus();
            return false;
        }

    }


    function username_loginVerify(){
        if(username_login.value != ""){
            username_login.style.border = "1px solid #5E6E66";
            username_login_error.innerHTML = "";
            return true;
        }

    }


    function password_loginVerify(){
        if(password_login.value != ""){
            password_login.style.border = "1px solid #5E6E66";
            password_login_error.innerHTML = "";
            return true;
        }

    }
</script>
