/**
 * Created by xuqi on 2016/9/23.
 */
$('.user.checkbox').checkbox('attach events', '.toggle.button');
$('.user.checkbox').checkbox('attach events', '.check.button', 'check');
$('.user.checkbox').checkbox('attach events', '.un_check.button', 'uncheck');




$('#see_user_but').click(function () {
    $.post("/cms/admin/class/get_user_table.php",
        {
            start:0,
            end:10
        },
        function (data,status) {
            $("#user_table").html(data+status)
        }
    )
});


$('.get_user_info_but').click(function () {
    var user_id = $(this).attr('user_id');
    $.post("/cms/admin/class/get_user_info.php",
        {
            id:user_id
        },
        function (data,status) {
            $(".show_user_info").html(data+status)
        }
    )
});