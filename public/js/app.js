$(document).ready(function(){
    if($('.data-table').length > 0) {
        $('.data-table').each(function (){
            $(this).dataTable();
        });
    }

    if($('.datetime-range').length > 0) {
        $('.datetime-range').each(function (){
            $(this).daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                format: 'DD.MM.YYYY HH:mm',
                timePicker12Hour: false
            });
        });
    }

    if($('.date-range').length > 0) {
        $('.date-range').each(function (){
            $(this).daterangepicker({
                format: 'DD.MM.YYYY'
            });
        });
    }
});