/**
 * Created by Tony on 17-Oct-16.
 */

var Profile = (function($){

    return {
        init: function() {
            this.bindUIActions();
        },
        bindUIActions: function() {
            console.log('test');
            $("#settings-profile #change-password-button button").click(function(){
                $(this).hide();
                $("#settings-profile #edit-password").show();
            });

            $("#settings-profile #edit-password-cancel").click(function(){
                $("#settings-profile #edit-password").hide();
                $("#settings-profile #change-password-button button").show();
            });

            $("#settings-profile #edit-password-change").click(function(){

                var newPassword = $("#settings-profile #new-password").val();
                var confirmNewPassword = $("#settings-profile #confirm-new-password").val();

                if (newPassword != confirmNewPassword) {
                    $("#msg-box").html("Passwords do not match.").show();
                    return false;
                }

                $.ajax({url: "/src/ajax.php", success: function(result){
                    console.log(result);
                    $("#msg-box").html("Success").show();
                }});

                return false;
            });
        }
    }

})(jQuery);
