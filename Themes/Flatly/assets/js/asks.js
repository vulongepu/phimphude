$(document).ready(function() {

	$("form#ask-question").submit(function(e) {

		e.preventDefault();

		var form = $(this);
		var submitBtn = form.find("button[type='submit']");
		var data  = form.serializeArray();
		// Send ajax request
		$.ajax({
			url: form.attr('action'),
			type: "POST",
			data: data,
			dataType: "json",
			beforeSend: function() {
				submitBtn.text('Đang gửi...');
			},
			success: function(data) {
				if (data['errors']) {
					submitBtn.text('Errors...');
					var delay = 2000;
					for (var i = data['msg'].length - 1; i >= 0; i--) {
						alertify.log(data['msg'][i], "error", delay);
						delay += 2000;
					};
				} else {
					submitBtn.text('OK');
					alertify.log(data['msg'], "success", 2000);
				}
				form[0].reset();
			}
		});

		return false;
	});

	$('.ask-answer-btn').each(function() {
		// Get question's id
		var question = $(this).data('question');
		var url = cURL.base + '/asks/' + question + '/answers';

	    $(this).qtip({
		    show: {
		        event: 'click'
		    },
	        content: {
	            text: function(event, api) {
	                $.ajax({
	                    url: url // Use href attribute as URL
	                })
	                .then(function(content) {
	                    // Set the tooltip content upon successful retrieval
	                    api.set('style.width', '320px');
	                    api.set('content.text', content);
	                }, function(xhr, status, error) {
	                    // Upon failure... set the tooltip content to error
	                    api.set('content.text', status + ': ' + error);
	                });
	                return 'Loading...'; // Set some initial text
	            }
	        },
	        position: {
	            my: 'top left',
	            at: 'bottom left',
	            effect: false
	        },
	        style: 'qtip-bootstrap',
	        hide: {
	        	event: 'unfocus',
	            fixed: true
	        }
	    });
	});

	$('body').on('click', '.btn-send-answer', function(e) {

		// Submit button
		var btn = $(this);

		$("form.form-answer").submit(function(e) {

			e.preventDefault();

			var form = $(this);
			var answersContainer = $('ul.asks-list-answers');
			// Get question's id
			var data  = form.serializeArray();
			// Send ajax request
			$.ajax({
				url: form.attr('action'),
				type: "POST",
				data: data,
				dataType: "json",
				beforeSend: function() {
					// Show loading text
					btn.text('Đang gửi...');
				},
				success: function(data) {
					form.find("textarea").val('');
					if (data['errors']) {
						btn.text('Error');
						var delay = 2000;
						for (var i = data['msg'].length - 1; i >= 0; i--) {
							alertify.log(data['msg'][i], "error", delay);
							delay += 2000;
						};

					} else {
						btn.text('OK');
						if (!data['admin']) {
							alertify.log(data['msg'], "success", 2000);
						} else {
							answersContainer.append(data['msg']);
						}
					}
				}
			});

			return false;
		});
	});

});