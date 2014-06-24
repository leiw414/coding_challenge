$('#mmmr').on('submit',function()){
	var that = $(this),
		contents = that.serialize();
	
	pathArray = window.location.href.split( '/' );
	protocol = pathArray[0];

	var url = protocol + '' + "index.php?/mmmr" ;
	
	$.ajax({
		url: url,
		dataType: 'json',
		type: 'post',
		data: contents,
		success: function(msg) {
					$('#results').html(msg);
				}
	});
	
	return false;
});

/*<script type="text/javascript">
		function ajax_get_json(){
			pathArray = window.location.href.split( '/' );
			protocol = pathArray[0];

			var url = protocol + '' + "index.php?/mmmr" ;
			$.ajax({
				url: url,
				type: 'POST',
				data: '{"numbers": [5, 6, 6, 7, 7]}',
				success: function(msg) {
					$('#results').html(msg);
				}
			});
		
			return false;
		}
		</script>*/