<html>
	<head>
		<title>Ruta</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
			<!--[if lt IE 9]>
				<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
				</script>
			<![endif]-->
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC_EbzI-13-H-wGPd5GJnM-9dd_ODXCdM"></script>
		<script src="js/ruta.js"></script>
    </head>
	<body>
		<div id='inforuta' data-latrest='<?php echo $_POST['latrest']; ?>' data-longrest='<?php echo $_POST['longrest']; ?>' data-latped='<?php echo $_POST['latped']; ?>' data-longped='<?php echo $_POST['longped']; ?>'></div>
		<div id="map-canvas"></div>
	</body>
</html> 