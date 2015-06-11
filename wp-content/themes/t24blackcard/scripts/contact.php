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
					if(result.
				}
			)
		}
	);
});
