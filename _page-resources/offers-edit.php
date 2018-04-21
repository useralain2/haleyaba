<script src="assets/metronic/demo/default/custom/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script> 

<script>
	var BootstrapDatepicker = function () { 
	    //== Private functions
	    var demos = function () {
	        
	        // input group layout 
	        $('.m_datepicker_2_modal').datepicker({
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

	var SummerNote = function () {
		// Privates 
		var demos = function (){
			$(".summernote").summernote({
				height:150
			})
		}

		return {
			// Public functions here
			init: function(){
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

	/**
	 * Select2 Multiselect 
	 */
	var Select2 = function (){
		// Privates
		var demos = function (){
			// multi select
	        $('.m_select2_3, .m_select2_3_validate').select2({
	            placeholder: "Select items",
	        });
		}

		// Public 
		return {
			init: function(){
				demos();
			}
		}
	}();

	jQuery(document).ready(function(){
		Select2.init();
		BootstrapDaterangepicker.init();
		SummerNote.init()
		BootstrapDatepicker.init();
	});
</script>