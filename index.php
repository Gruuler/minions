<head>

<?php
include 'elements/master.php';

include 'elements/authenticate.php';
?>

</head>

<body>

<?php include 'elements/header.php'; ?>

<?php 
	if($valid) {
		echo "Please <a href='login.php'>Log In</a> to coninue.";
	}
?>

<?php include 'elements/footer.php'; ?>

</body>
