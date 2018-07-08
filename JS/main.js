$(document).ready(function() { 
    $('#type').change(function() {
        var type = $('#type').val();
        $.post("typeSwitch.php", {
            selected: type
        }, function (data) {
            $('#load-type').load(data);
        });
    });
});