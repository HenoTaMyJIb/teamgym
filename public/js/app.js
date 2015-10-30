$(document).ready(function () {
    if ($('.data-table').length > 0) {
        $('.data-table').each(function () {
            $(this).dataTable();
        });
    }

    if ($('.date-single').length > 0) {
        $('.date-single').each(function () {
            $(this).daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                format: 'DD.MM.YYYY'
            });
        });
    }

    if ($('.datetime-range').length > 0) {
        $('.datetime-range').each(function () {
            $(this).daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                format: 'DD.MM.YYYY HH:mm',
                timePicker12Hour: false
            });
        });
    }

    if ($('.date-range').length > 0) {
        $('.date-range').each(function () {
            $(this).daterangepicker({
                format: 'DD.MM.YYYY'
            });
        });
    }

    if ($('input:radio, input:checkbox').length > 0) {
        $('input:radio, input:checkbox').each(function () {
            var theme = 'square';
            var color = 'green';
            if ($(this).data('theme')) {
                theme = $(this).data('theme');
            }
            if ($(this).data('color')) {
                color = $(this).data('color');
            }

            var checkBoxClass = 'icheckbox_' + theme + '-' + color;
            var radioClass = 'iradio_' + theme + '-' + color;
            $(this).iCheck({
                checkboxClass: checkBoxClass,
                radioClass: radioClass
            });
        });
    }

    var table = $('#elementsTable').DataTable({
        "columnDefs": [
            { "className": 'never', "targets": 0 },
            { "width": "25px", "targets": 1, 'className': 'desktop tablet' },
            { "targets": 2, 'className': 'all' },
            { "targets": [3, 4], 'className': 'tablet desktop' }
        ],
        "sort": false,
        "displayLength": 50,
        "responsive": true,
        "drawCallback": function (settings) {
            var api = this.api();
            var rows = api.rows({page: 'current'}).nodes();
            var last = null;

            api.column(0, {page: 'current'}).data().each(function (group, i) {
                if (last !== group) {
                    $(rows).eq(i).before(
                        '<tr class="group" style="background-color: #f4f4f4;"><td colspan="4" style="font-size: 16px; font-weight: 600">' + group + '</td></tr>'
                    );

                    last = group;
                }
            });
        }
    });

    // Order by the grouping
    $('#example tbody').on('click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            table.order([ 2, 'desc' ]).draw();
        }
        else {
            table.order([ 2, 'asc' ]).draw();
        }
    });

    $('select.select2-input').select2();

    $('select.element-select').select2({
        ajax: {
            dataType: 'json',
            data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function (data, page) {
                return {
                    results: data
                };
            },
            cache: true
        },
        width: '100%',
        containerCssClass: "wide-container",
        dropdownCssClass: 'bigdrop',
        placeholder: "-",
        allowClear: true,
        escapeMarkup: function (markup) {
            return markup;
        }, // let our custom formatter work
        templateResult: function (element) {
            if (element.loading) return element.name;
            var markup = '<div class="clearfix">' +
                '<div class="col-sm-2">' +
                '<img src="/' + element.symbol + '" style="max-width: 100%" />' +
                '</div>' +
                '<div clas="col-sm-10">' +
                '<div class="clearfix">' +
                '<div class="col-sm-4"><strong>' + element.name + '</strong></div>' +
                '<div class="col-sm-4">' + element.type_code + '</div>' +
                '<div class="col-sm-1"><strong>' + element.element_values[0].value + '</strong></div>' +
                '</div>';

            markup += '</div></div>';

            return markup;
        },
        templateSelection: function (element) {
            if (element.text) return element.text

            return  '<img src="/' + element.symbol + '" style="max-width: 100%" />';
        }
    });

    $('select.element-select').on("select2:open", function (e) {
        $(this).css('width', '800px')
    });

    $('.select-tumbling').on("select2:select", function (e) {
        var elementValue = e.params.data.element_values[0].value;
        $(this).parents('.element').find('.element-value').val(elementValue);


        var seriesValue = 0;
        for (var i = 0; i < 3; i++) {
            var values = $(this).parents('.series').find('.element-value').not('.checked');
            var max = null;
            var va = 0;
            values.each(function (index) {
                var v = $(this).val();
                if (v) {
                    if (parseFloat(v) > parseFloat(va)) {
                        va = v;
                        max = $(this);
                    }
                }
            });
            if (max) {
                seriesValue += parseFloat(max.val());
                max.addClass('checked');
            }
        }
        var values = $(this).parents('.series').find('.element-value').removeClass('checked');

        $(this).parents('.series').find('.series-value').html(seriesValue.toFixed(2));

        if ($(this).hasClass('first')) {
            $(this).parents('.round').find('.round-value').html((seriesValue * parseInt($('.gymnasts-amount').val())).toFixed(2));
        }
        else {
            var seriesValues = $(this).parents('.round').find('.series-value');
            var roundValue = 0;
            seriesValues.each(function () {
                console.log($(this).html());
                if ($(this).html()) {
                    roundValue += parseFloat($(this).html());
                }
            });
            console.log(roundValue);
            $(this).parents('.round').find('.round-value').html(roundValue.toFixed(2));
        }
    });

    $('.series').on('click', '.add-element', function (e) {
        e.preventDefault();
        var element = $(this).parents('.form-group').find('.hide:first');
        element.removeClass('hide');
        element.show();
    });

    $('.form-validate').validate({
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-error').removeClass('has-success');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.form-group').addClass('has-success').removeClass('has-error');
        }
    });




})
;


