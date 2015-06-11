$(function(){
	$('#contact-form form#contact').submit(
		function(event){
			event.preventDefault();
			$this = $(this);
			$.ajax(
				'type': 'POST',
				'dataType': 'json',
				'data': $this.serialize(),
				'success': function(result){
					if(result.hasOwnProperty('status')){
						if(result.status == 200){
							$('#result', $this).html('Thank you for contacting us. We\'ll be in touch shortly.');
						}elseif(result.status == 500){
							//error sending message.
						}elseif(result.status == 404){
							$('#result', $this).html('Missing required fields!');
						}
					}
				}
			)
		}
	);
});
