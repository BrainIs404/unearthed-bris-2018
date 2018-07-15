function load_data() {
    $.ajax({
        method: 'POST',
        url: $("#read-url").attr("data-url"),
        success: function(r) {
            var response = JSON.parse(r);
            if (response.success) {
                $("#read-url").html(response.data);
            } else {
                $("#error-message").html(response.message);
                $("#error-message").removeClass("hidden");
            }
        },
        error: function() {
            $("#error-message").html("Error: no answer from the server :(");
            $("#error-message").removeClass("hidden");
        }
    });
}

window.setInterval(load_data, 500);