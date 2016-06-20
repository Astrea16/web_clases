$(document).ready(function() {
	$('.bxslider').bxSlider({
		infiniteLoop: false,
		hideControlOnEnd: true
	});
	
	$("#form").off('submit').on('submit', function() {
		var form = $(this),
			submit = form.find('[type="submit"]');
		
		submit.attr('disabled', true);
		
		$.ajax({
			type: "POST",
			url: "post.php",
			data: form.serialize(),
			success: function(result) {
				$(document).scrollTop(form.offset().top ); 
				
				if (result) {
					$('#result').html(result).parent().removeClass('hidden');
					form.find("input[type=text], input[type=email], textarea").val("");
				} else {
					$('#result').parent().addClass('hidden');
				}
				
				submit.attr('disabled', false);
			}
		});
		
		return false;
	});
});
