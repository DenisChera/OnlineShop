<?php
ob_start();
include ('header1.php');
?>

<div class="try3">
    <div class="intern3">
        <h2></h2></div></div>

<!--------categorii-------->
<?php
include ('Template/categorii.php');
?>


<div class="try">
    <div class="intern">
        <h2></h2></div></div>

<!--------Recomandate-------->
<?php
include('Template/recomandate.php');
?>

<div class="try4">
    <div class="intern4">
    </div></div>

<!-----noutati-------->
<?php
include('Template/noutati.php')
?>


<!-----black friday-------->
<?php
include('Template/black_friday.php');
?>


<!-----reduceri-------->
<?php
include('Template/reduceri.php');
?>

<!-------swiper  end--------->

<script type="text/javascript" src="HTML Template/swiper.min.js"></script>
<script src="HTML Template/transition.js"></script>

<!-----brands-------->
<?php
include('Template/brands.php');
?>

<!--------footer-------->

<?php
include ('footer.php');
?>

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




</body>
</html>