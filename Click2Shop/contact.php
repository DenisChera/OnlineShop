<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Click2Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HTML Template/swiper.min.css"/>
    <link rel="stylesheet" href="HTML Template/style2.css">
    <link rel="stylesheet" href="HTML Template/style.css">
    <script type="text/javascript" src="HTML Template/swiper.min.js"></script>
    <script src="HTML Template/transition.js"></script>
    <script src="HTML Template/jquery-3.2.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
        <?php

        require ('functions.php');

        ?>

    <body>
        <div class="navbar">
            <nav>
                <div class="logo">
                    <img src="HTML Template/imagini/c2s-logo.png"></div>
                <ul>
                    <li><a href="index.php">Acasa</a></li>
                    <li><a href="produse.php">Produse</a></li>
                    <li><a class="active" href="contact.php">Contact</a></li>
                    <li><a href="favorite.php">Favorite</a></li>
                    <li><a href="cont.php">Contul meu</a></li>
                    <li><a href="cos_cumparaturi.php"><img src="HTML Template/imagini/cart.png" width="50px" height="30px"><span class="cos"><?php if (!empty($produs)) {
                                    echo count($produs->getData('cos'));
                                } ?> buc.</span></a></li>
                </ul>

            </nav>

        </div>
        <?php
        if(count($produs->getData('cos'))==0) {
            ?>
            <br>
            <?php
            }
            ?>
        <div class="maintenance">
        <section>
            <div class="container">
                <div class="contactinfo">
                    <div>
                        <h2>Informatii de contact</h2>
                        <ul class="info">
                            <li>
                                <span><img src="HTML Template/imagini/placeholder.png"></span>
                                <span>Timisoara<br>
                                <br>
                                </span>
                            </li>
                            <li>
                                <span><img src="HTML Template/imagini/gmail.png"></span>
                                <span>denis.chera00@e-uvt.ro
                                </span>
                            </li>
                            <li>
                                <span><img src="HTML Template/imagini/viber.png"></span>
                                <span>0768730493
                                </span>
                            </li>
                        </ul>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                        <ul class="sci">

                            <li><a href="#"><img src="HTML Template/imagini/facebook.png"></a></li>
                            <li><a href="#"><img src="HTML Template/imagini/instagram.png"></a></li>
                            <li><a href="#"><img src="HTML Template/imagini/linkedin.png"></a></li>
                            <li><a href="#"><img src="HTML Template/imagini/youtube.png"></a></li>
                            <li><a href="#"><img src="HTML Template/imagini/twitter.png"></a></li>

                        </ul>


                </div>
                <form id="ContactForm" action="validate_login2.php" method="post" onsubmit="return Validate_login()" name="vform3">
                <div class="contactForm">
                    <h2>Trimite-ne un mesaj!</h2>
                    <br>
                    <br>

                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" name="nume_utilizator" required>
                            <span>Nume utilizator</span>
                        </div>

                        <div class="inputBox w50">
                            <input type="email" name="email" required>
                            <span>Email</span>
                        </div>

                        <div class="inputBox w100">
                            <textarea name="" required></textarea>
                            <span>Scrie un mesaj...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                        <div>
                            <h5>Poti sa raportezi o problema in legatura cu o comanda sau un produs comandat de pe site.</h5>
                        </div>
                        <div class="msg">
                            <h5>Vom incerca sa va raspundem intr-un timp cat mai scurt.Multumim!</h5>
                        </div>
                        <ul class="edit">

                            <br>
                            <li><a href="index.php"><img src="HTML Template/imagini/c2s-logo.png"></a></li>
                        </ul>
                    </div>
                </div>
                    </form>
            </div>
        </section>
        </div>
    </body>
</html>