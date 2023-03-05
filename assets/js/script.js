$(document).ready(function() {
	$('.nav-scroll').on('click', function() {
		var page = $(this).attr('data-target');
		var speed = 750;
		$('html, body').animate( { scrollTop: $(page).offset().top-100 }, speed ); // Go
		return false;
	});

	$("#espace-btn").click(function() {
		$.ajax({
			type:"get",
			url:"includes/login.php",
		})

		.done(function(data){
			$('#login-page').html(data);
		})
		$('html, body').animate( { scrollTop: $(body).offset().top-100 }, 100 );
	});
});
