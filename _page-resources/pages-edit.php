<script src="assets/metronic/demo/default/custom/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>

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
  });
</script>