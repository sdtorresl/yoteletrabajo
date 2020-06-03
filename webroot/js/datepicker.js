document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var options = {
        "autoclose": true,
        "format": "yyyy-mm-ddT00:00:00"
    };
    M.Datepicker.init(elems, options);
});