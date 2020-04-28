$(document).ready( function() {
    $('#login').submit( function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "db/control_login.php",
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success: function () {
                window.location.replace("inicio.php");
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
        });
    });
});