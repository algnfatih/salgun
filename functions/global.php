<?php if(!isset($GLOBALS['secure'] )) { header("Location: ../index.php?sayfa=home"); } ?>

<?php

include "config.php";

function yazi($id){
	$yazi = DB::getRow("SELECT * FROM yazilar WHERE yazi_id = ? LIMIT 1", array($id));
	return $yazi;
}

function yazilar($limit){
	$limiteksi = $limit - 5;
	$yazilar = DB::get("SELECT * FROM yazilar ORDER BY yazi_id ASC LIMIT $limiteksi, 5");
	return $yazilar;
}