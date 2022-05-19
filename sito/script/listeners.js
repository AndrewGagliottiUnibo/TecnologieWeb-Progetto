/**
 * Button listeners for notifications table
 */
$(document).ready(function () {
    $('body').on('click', '#notifications_table button', function () {
        $("#notifications_table").css("background-color", "yellow");
        var ntf_id = $(this).attr('name');
        $("#notifications_section").load("?page=load_notifications #notifications_table", {
            notification_id: ntf_id
        });
    });
});