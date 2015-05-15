$(document).ready(function(){
    if($('.data-table').length > 0) {
        $('.data-table').each(function (){
            $(this).dataTable();
        });
    }

    if($('.date-single').length > 0) {
        $('.date-single').each(function (){
            $(this).daterangepicker({
                singleDatePicker:true,
                showDropdowns:true,
                format: 'DD.MM.YYYY'
            });
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
                format: 'YYYY-MM-DD'
            });
        });
    }


});