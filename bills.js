//CHECKBOX
$(document).ready(function() {
	$('#input_price').hide(0);
	$('#input_add').hide(0);
	$('#input_remove').hide(0);

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
	$('.money_button').click(function() {
		if($('.bill_input_div').is(":visible")){
			$('#input_price').slideUp("slow");
		}else{
			$('#input_price').slideDown("slow");
		}
	});
	$('.plus_button').click(function() {
		if($('.bill_input_div').is(":visible")){
			$('#input_add').slideUp("slow");
		}else{
			$('#input_add').slideDown("slow");
		}
	});
	$('.minus_button').click(function() {
		if($('.bill_input_div').is(":visible")){
			$('#input_remove').slideUp("slow");
		}else{
			$('#input_remove').slideDown("slow");
		}
	});
});
