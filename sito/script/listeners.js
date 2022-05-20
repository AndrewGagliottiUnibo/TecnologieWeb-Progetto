/**
 * Button listeners for notifications table
 */
$(document).ready(function () {
    $('body').on('click', '#notifications_table button', function () {
        var ntf_id = $(this).attr('name');
        $("main").load("?page=load_notifications #load_notifications_update", {
            notification_id: ntf_id
        });
    });
});

/**
 * Cart ajax
 */
$(document).ready(function () {
    $('body').on('click', '.cart_button', function () {
        var btn_value = $(this).attr('name');
        $(this).css("background-color", "black");
        var id_product = $(this).closest('label').siblings('.label_cart_id').children().attr('name');
        console.log(id_product);
        $("main").load("?page=load_cart #load_cart_update", {
            crt_value: btn_value,
            product_id: id_product
        });
    });
});


$(document).ready(function () {
    $(".cookie-btn").click(function () {
        $(".cookie-container").addClass("not_active");
    });
});
