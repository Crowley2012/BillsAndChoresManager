//CHECKBOX
$(document).ready(function() {
	$('#Don').change(function() {
		if($(this).is(":checked")) {
		    var returnVal = confirm("Check");
		    $(this).attr("checked", returnVal);
			$.ajax({
			   url: 'update_check.php',
			   success: function (response) {
				 alert(response);
			   }
			});
   
		}else{
		    var returnVal = confirm("Un-Check");
		    $(this).attr("checked", returnVal);
		}      
	});
});
