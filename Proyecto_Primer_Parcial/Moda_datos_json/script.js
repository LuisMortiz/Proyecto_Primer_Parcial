$(document).ready(function() {
    $('#miModal').on('show.bs.modal', function (e) {
        $.ajax({
            url: './json.php',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('#jsonData').html(JSON.stringify(data, null, 4));
            },
            error: function() {
                alert("Errorrr al cargar los datoss.");
            }
        });
    });
});