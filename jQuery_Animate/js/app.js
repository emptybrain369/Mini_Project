$(document).ready(function(){
    jQuery("#animate").click(function(){
    $(".box").animate({left:"250px",width:"400px",},1000,function(){
    $('.box').hide(100).show(2000);
    });
    });

});
