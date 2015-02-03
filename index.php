<!DOCTYPE html>
<html>
<head>
<title>App Ae</title>
<meta charset="UTF-8">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/header.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/header.css" rel="stylesheet">

</head>
<body>
<?php
if (! isset ( $_COOKIE ['PHPSESSID'] )) {
	session_set_cookie_params ( 0 );
	session_start ();
	session_regenerate_id ( true );
} else {
	session_start ();
}
include 'template/header.php';
?>
<div id="content"><?php
if (isset ( $_GET ['pagina'] )) {
	if ($_GET ['pagina'] == 'home') {
		include 'template/home.php';
	} elseif ($_GET ['pagina'] == 'drinks') {
		include 'template/addDrinkTemplate.php';
	} elseif ($_GET ['pagina'] == 'reminder') {
		include 'template/addReminder.php';
	} elseif ($_GET ['pagina'] == 'contacts') {
		include 'template/search_contacts.php';
	} elseif ($_GET ['pagina'] == 'create_contact') {
		include 'template/contacts.php';
	}
} else {
	include 'template/home.php';
}
?></div>
<?php
include 'template/footer.php';
?>
</body>
</html>