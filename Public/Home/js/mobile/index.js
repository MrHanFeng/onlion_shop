var video_play
var back_fn;

$(function(){
    /*导航切换*/
    var menu_li=$('.menu li');
    var detail=$('.details .detail');
    menu_li.click(function(){
        menu_li.removeClass('cate-hover');
        detail.removeClass('dt-hover');
        $(this).addClass('cate-hover');
        var key=$(this).index();
        detail.eq(key).addClass('dt-hover');
    });


});




