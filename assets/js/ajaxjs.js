$( document ).ready(function() {
    $("#btn").click(function(){
        console.log(2);
        $.ajax({
            type: "POST",
            url: "ajaxswear.php",
            data: $("#" + ajax_form).serialize(),
            success: function (data) {
                $("#content").html(data);
                console.log(3);
            }
        });
    });
});