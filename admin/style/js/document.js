/**
 * Created by admin on 2016/9/19.
 */

$('#sidebar_but').click(function () {
    a();
})

function a() {
    $('.ui.sidebar')
        .sidebar('setting', 'transition', 'overlay')
        .sidebar('toggle')
    ;
}
