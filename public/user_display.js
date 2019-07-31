<script src="https://code.jquery.com/jquery-3.3.1.min.js">
</script>
<script>
	$(document).ready(function() {
		$.ajax({
			url: "data.json",
			dataType: "json",
			success: function(data) {
				var result = findUserDetails(data, 'login_id') || {};
				$('#fname').html(result['firstname']);
				$('#lname').html(result['lastname']);
				$('#mnum').html(result['mobilenumber']);
				$('#degree').html(result['degree']);
				$('#age').html(result['age']);
				$('#cname').html(result['collegename']);
				$('#location').html(result['location']);
			}
		})
	});

	function findUserDetails(arr, propName) {
		var propValue = "<?php echo $_SESSION["login_id"]?>";
  	for (var i=0; i < arr.length; i++)
    	if (arr[i][propName] == propValue)
      return arr[i];
  }
</script>