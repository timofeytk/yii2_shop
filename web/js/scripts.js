jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
});
$(document).ready(function() {
    var navoffeset=$(".agileits_header").offset().top;
    $(window).scroll(function(){
        var scrollpos=$(window).scrollTop();
        if(scrollpos >=navoffeset){
            $(".agileits_header").addClass("fixed");
        }else{
            $(".agileits_header").removeClass("fixed");
        }
    });

});
$(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
            $('body').removeClass('loading');
        }
    });
});
$(document).ready(function(){
    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );
});
$(document).ready(function() {
    /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
    */

    $().UItoTop({ easingType: 'easeOutQuart' });

});
paypal.minicart.render();

paypal.minicart.cart.on('checkout', function (evt) {
    var items = this.items(),
        len = items.length,
        total = 0,
        i;

    // Count the number of each item in the cart
    for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
    }

    if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
    }


});

$(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
            $('body').removeClass('loading');
        }
    });
});

function getCart(){
    $.ajax({
        url: 'cart/show',
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка работы корзины !');
            showCart(res);
        },
        error: function () {
            alert('Неизвестная ошибка');
        }
    });
}

function clearCart(){
    $.ajax({
        url: 'cart/clear',
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка работы корзины !');
            showCart(res);
        },
        error: function () {
            alert('Неизвестная ошибка');
        }
    });
}

function showCart(cart){
    $('#modal-cart .modal-body').html(cart);
    $('#modal-cart').modal();
    let cartSum = $('#cart-sum').text() ? $('#cart-sum').text() : '$0';
    if(cartSum){
        $('.cart-sum').text(cartSum);
    }
}

/*Cart*/

$('.add-to-cart').on('click', function(){
    let id = $(this).data('id');
    $.ajax({
        url: 'cart/add',
        data: {id: id},
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка работы корзины !');
            showCart(res);
        },
        error: function () {
            alert('Неизвестная ошибка');
        }
    });
    return false;
});

$('#modal-cart .modal-body').on('click', '.del-item', function () {
    let id = $(this).data('id');
    $.ajax({
        url: 'cart/del-item',
        data: {id: id},
        type: 'GET',
        success: function(res){
            if(!res) alert('Ошибка работы корзины !');
            let now_location = document.location.pathname;
            if(now_location == '/cart/checkout'){
                location = 'cart/checkout';
            }
            showCart(res);
        },
        error: function () {
            alert('Неизвестная ошибка');
        }
    });
});

$('.value-plus, .value-minus').on('click', function () {
    let id = $(this).data('id'),
        qty = $(this).data('qty');
    $.ajax({
        url: 'cart/change-cart',
        data: {id: id, qty: qty},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка добавления');
            location = 'cart/checkout';
        },
        error: function () {
            alert('Неизвестная ошибка!');
        }
    });
});

// $('.value-plus').on('click', function(){
//     var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
//     divUpd.text(newVal);
// });
//
// $('.value-minus').on('click', function(){
//     var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
//     if(newVal>=1) divUpd.text(newVal);
// });
// $(document).ready(function(c) {
//     $('.close1').on('click', function(c){
//         $('.rem1').fadeOut('slow', function(c){
//             $('.rem1').remove();
//         });
//     });
// });
// $(document).ready(function(c) {
//     $('.close2').on('click', function(c){
//         $('.rem2').fadeOut('slow', function(c){
//             $('.rem2').remove();
//         });
//     });
// });
// $(document).ready(function(c) {
//     $('.close3').on('click', function(c){
//         $('.rem3').fadeOut('slow', function(c){
//             $('.rem3').remove();
//         });
//     });
// });
$(document).ready(function() {
    var navoffeset=$(".agileits_header").offset().top;
    $(window).scroll(function(){
        var scrollpos=$(window).scrollTop();
        if(scrollpos >=navoffeset){
            $(".agileits_header").addClass("fixed");
        }else{
            $(".agileits_header").removeClass("fixed");
        }
    });

});
