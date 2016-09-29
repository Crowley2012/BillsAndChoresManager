//CHECKBOX
$(document).ready(function() {
	$('.bill_check').change(function() {
		if($(this).is(":checked")) {
			$.ajax({
			   url: 'update_check.php?name=' + $(this).attr('name') + '&table=' + $(this).attr('table') + '&check=1'
			});
		}else{
			$.ajax({
			   url: 'update_check.php?name=' + $(this).attr('name') + '&table=' + $(this).attr('table') + '&check=0'
			});
		}      
	});
});
