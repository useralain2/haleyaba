<script src="assets/metronic/demo/default/custom/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

<script>
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

	jQuery(document).ready(function(){
		SummerNote.init()
		BootstrapDatepicker.init();

		$('#ybSelectAll').click(function(){
			$('.yb_countries_list').each(function(){
				$(this).prop('checked', true);
			});
		});

		$('#ybClearAll').click(function(){
			$('.yb_countries_list').each(function(){
				$(this).prop('checked', false);
			});
		});
	});
</script>