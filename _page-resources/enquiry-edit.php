
<script src="assets/metronic/demo/default/custom/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

<script>

/**
 * Bootstrap Datepicker
 */
var BootstrapDatepicker = function () {
    
    //== Private functions
    var demos = function () {
        
        // input group layout 
        $('#m_datepicker_2_modal').datepicker({
            todayHighlight: true,
            orientation: "bottom right",
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        });

    }

    return {
        // public functions
        init: function() {
            demos(); 
        }
    };
}();

/**
 * Bootstrap Daterangepicker
 */
var BootstrapDaterangepicker = function () {
    
    //== Private functions
    var demos = function () {
        
        // input group and left alignment setup
        $('#m_daterangepicker_2').daterangepicker({
            buttonClasses: 'm-btn btn',
            applyClass: 'btn-brand',
            cancelClass: 'btn-secondary'
        }, function(start, end, label) {
            $('#m_daterangepicker_2 .form-control').val( start.format('YYYY-MM-DD') + ' / ' + end.format('YYYY-MM-DD'));
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

jQuery(document).ready(function() {   
    BootstrapDatepicker.init(); 
    BootstrapDaterangepicker.init();
});



</script>