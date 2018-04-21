<script>  
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