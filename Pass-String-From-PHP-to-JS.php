<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pass from PHP to JS</title>

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<?php $smart = 'haha'; ?>

	<script>
		$(document).ready(function(){
			var smart = <?php echo json_encode($smart); ?>;
			alert(smart);
		});
	</script>
	<!-- testing git -->
</body>
</html>