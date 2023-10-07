jQuery(document).ready(function(){
                /*ADD*/
    jQuery(".add").click(function(){

        var a = jQuery(".input1").val();
        var b = jQuery(".input2").val();

        $.ajax({
            url:"function.php",
            type:"POST",
            data:{
                "val1":a,
                "val2":b,
                "check":"add"
            },
            success:function(res){
                jQuery(".result").val(res);
            }
        });
    });
                /*SUB*/
                jQuery(".sub").click(function(){

                    var a = jQuery(".input1").val();
                    var b = jQuery(".input2").val();
            
                    $.ajax({
                        url:"function.php",
                        type:"POST",
                        data:{
                            "val1":a,
                            "val2":b,
                            "check":"sub"
                        },
                        success:function(res){
                            jQuery(".result").val(res);
                        }
                    });
                });
                                /*MULTI*/
    jQuery(".mul").click(function(){

        var a = jQuery(".input1").val();
        var b = jQuery(".input2").val();

        $.ajax({
            url:"function.php",
            type:"POST",
            data:{
                "val1":a,
                "val2":b,
                "check":"mul"
            },
            success:function(res){
                jQuery(".result").val(res);
            }
        });
    });
                    /*DIV*/
                    jQuery(".div").click(function(){

                        var a = jQuery(".input1").val();
                        var b = jQuery(".input2").val();
                
                        $.ajax({
                            url:"function.php",
                            type:"POST",
                            data:{
                                "val1":a,
                                "val2":b,
                                "check":"div"
                            },
                            success:function(res){
                                jQuery(".result").val(res);
                            }
                        });
                    });

});
