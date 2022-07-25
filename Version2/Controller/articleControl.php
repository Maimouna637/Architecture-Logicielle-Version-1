<?php 

		require_once 'Site.php';

	function showArticle(){

		$chaine = getArticle();

		require_once 'Vue/articleVue.php';

	}


 ?>
