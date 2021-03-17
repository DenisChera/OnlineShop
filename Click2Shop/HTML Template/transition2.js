//script-ul pt swipe
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4.03,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

});

var swiper2 = new Swiper('.swiper-container2', {
    slidesPerView: 105.03,
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

$(document).ready(function() {
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");


    $qty_up.click(function () {
        let $input = $(`.qty .qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function (i, oldval) {
                return ++oldval;
            });
        }
    });

    $qty_down.click(function () {
        let $input = $(`.qty .qty_input[data-id='${$(this).data("id")}']`);
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
    let $deal_price = $("#deal-price");
    let $deal_price2 = $("#deal-price2");
    $qty_up2.click(function () {
        let $input2 = $(`.qty_input2[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        $.ajax({
            url: "template/ajax.php", type: 'post', data: {itemid: $(this).data("id")}, success : function (result) {

                let obj = JSON.parse(result);

                let item_price = obj[0]['item_price'];
                if ($input2.val() >= 1 && $input2.val() <= 9) {
                    $input2.val(function (i, oldval) {
                        return ++oldval;
                    });

                    $price.text(parseInt(item_price * $input2.val()).toFixed(2));
                    let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    let total = parseInt($deal_price2.text()) + parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                    $deal_price2.text(total.toFixed(2));
                }


            }});
    });




    $qty_down2.click(function () {
        let $input2 = $(`.qty_input2[data-id='${$(this).data("id")}']`);
        let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                let obj = JSON.parse(result);
                let item_price = obj[0]['item_price'];

                if($input2.val() > 1 && $input2.val() <= 10){
                    $input2.val(function(i, oldval){
                        return --oldval;
                    });


                    $price.text(parseInt(item_price * $input2.val()).toFixed(2));
                    let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    let total = parseInt($deal_price2.text()) - parseInt(item_price);
                    $deal_price.text(subtotal.toFixed(2));
                    $deal_price2.text(total.toFixed(2));
                }

            }});
    });
    });
