<?php
	//echo 'INDEX';

//phpinfo();
	require_once("datebase.php");
	require_once("models/articles.php");
	//$article = articles_get($_GET['id']);
		$articles = articles_all();

		include("views/articles.php");


	?>