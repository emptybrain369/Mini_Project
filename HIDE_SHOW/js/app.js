$("document").ready(function(){
//Hide
$("#hidebtn").click(function(){
$(".box").hide(1000);
 });
//Show
$("#showbtn").click(function(){
    $(".box").show(1000);
     });
     //Toggle
$("#togglebtn").click(function(){
    $(".box").toggle(1000);
     });
});