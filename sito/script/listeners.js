/**
 * Button listeners for notifications table
 */
$(document).ready(function () {
    $('body').on('click', '#notifications_table button', function () {
        var ntf_id = $(this).attr('name');
        $("#notifications_section").load("?page=load_notifications #notifications_table", {
            notification_id: ntf_id
        });
    });
});

$(document).ready(function () {
    $(".cookie-btn").click(function () {
        $(".cookie-container").addClass("not_active");
    });
});
