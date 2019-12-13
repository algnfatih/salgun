<?php $GLOBALS['secure'] = 'var';  ?>

<?php include 'functions/global.php'; ?>

<?php include 'pages/header.php'; ?>

<?php include 'pages/navs.php'; ?>

<?php 

if (isset($_GET['sayfa'])){
	$sayfa = $_GET['sayfa'];
	if (file_exists("pages/$sayfa.php")){
		if($sayfa=='header' || $sayfa =='footer' || $sayfa=='navs'){
			header("Location: index.php?sayfa=home");
		}
		else {
			include "pages/$sayfa.php";
		}
	}
	else {
		header("Location: index.php?sayfa=home");
	}
	
}
else {
	
	header("Location: index.php?sayfa=home");
		
}


?>

<?php include 'pages/footer.php'; ?>
