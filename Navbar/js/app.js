jQuery(document).ready(function(){

    jQuery("ul").parent("li").children("a").append("<i class='fa fa-angle-down'></i>");

    jQuery(".menu ul li").click(function(){
        jQuery(this).children("ul").slideToggle(1000);
        return false;
    });

    var width = jQuery("body").width();
    if(width <= 768){
        jQuery(".dropdown").show();
        jQuery(".menu").hide();
        jQuery(".open").show();
        jQuery(".close").hide();
  
    }
    else{
        jQuery(".dropdown").hide();
        jQuery(".menu").show();
    }

    jQuery(".open").click(function(){
        jQuery(".menu").slideDown(100);
        jQuery(this).hide();
        jQuery(".close").show();
        return false;
    });

    jQuery(".close").click(function(){
        jQuery(".menu").hide();
        jQuery(this).hide();
        jQuery(".open").show();
        return false;
    });

});
