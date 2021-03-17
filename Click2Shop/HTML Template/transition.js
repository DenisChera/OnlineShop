//script-ul pt swipe
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5.03,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});


$(document).ready(function() {
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $input = $(".qty .qty_input");

    $qty_up.click(function () {
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function (i, oldval) {
                return ++oldval;
            });
        }
    });

    $qty_down.click(function () {
        if ($input.val() > 1 && $input.val() <= 10) {
            $input.val(function (i, oldval) {
                return --oldval;
            });
        }
    });
});


$(document).ready(function() {
    let $qty_up2 = $(".qty2 .qty2-up");
    let $qty_down2 = $(".qty2 .qty2-down");
    let $input2 = $(".qty2 .qty_input2");

    $qty_up2.click(function () {
        if ($input2.val() >= 1 && $input2.val() <= 9) {
            $input2.val(function (i, oldval) {
                return ++oldval;
            });
        }
    });

    $qty_down2.click(function () {
        if ($input2.val() > 1 && $input2.val() <= 10) {
            $input2.val(function (i, oldval) {
                return --oldval;
            });
        }
    });
});
