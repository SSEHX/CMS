/**
 * Created by admin on 2016/9/20.
    公共js
 */
/**
 * Created by xuqi on 16/9/19.
 */
$('#sidebar_but').click(function () {
    a();
});

// 侧边栏
function a() {
    $('.ui.sidebar')
        .sidebar('setting', 'transition', 'overlay')
        .sidebar('toggle')
    ;
}

function error() {
    $('.dimmer').dimmer('show');
}

$('#user_head').popup({
    on:'click'
});