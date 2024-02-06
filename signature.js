$(function() {

	// Get the form.
	var form = $('#signatureForm');

	// Get The submit button
	var submitBtn = $('#submitBtn');

	// Get the messages div.
	var formMessages = $('#responseMsg');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		// Make the button disabled
		$(submitBtn).attr('disabled', 'disabled');

		var loading = '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>';

		// Show the processing message to the user
		$(formMessages).html(loading);
		$(formMessages).addClass('processing');
		$(formMessages).removeClass('error');
		$(formMessages).removeClass('success');

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false
		})
		.done(function(response) {
			// Make the button active
			$(submitBtn).removeAttr('disabled');

			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('processing');
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			$('.form-control').val('');

            var data = JSON.parse(response);

            if(data.status === 'success') {
                // Handle success: redirect with data
                var queryParams = $.param(data); // Convert data to query parameters
                window.location.assign('signature.php?' + queryParams);
            }
		})
		.fail(function(data) {
			// Make the button active
			$(submitBtn).removeAttr('disabled');

			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('processing');
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

            var data = JSON.parse(data.responseText);

			// Set the message text.
			if (data.responseText !== '') {
				var error_message = `<div class='alert alert-danger rounded-1' role='alert'>${data.message}</div>`
				$(formMessages).html(error_message);
			} else {
				$(formMessages).html('Oops! An error occurred and your message could not be sent.');
			}
		});

	});

});