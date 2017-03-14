<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="style.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
	<div class="container-fluid">
		<div class="row" id="row1">
			<div class="col-xs-4" id="tankWrapper">
				<div id="tank" class="row">
					<div id="level1"></div>
					<div id="level2"></div>
					<div id="level3"></div>
					<div id="level4"></div>
					<div id="level5"></div>
					<div id="level6"></div>
					<div id="level7"></div>
					<div id="level8"></div>
					<div id="level9"></div>
					<div id="level10"></div>
				</div>
				<div class="row" id="buttonSpace">
					<!-- Indicates a dangerous or potentially negative action -->
					<button  class="btn btn-success btn-lg " id="fetchbtn"  type="button">Fetch</button>
					<button type="button" class="btn btn-danger btn-lg" id="stopbtn">Stop</button>
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>