<?php
	
	function displayResults($results) {
		echo "<h2>Table results</h2>";
		echo "<section>";
		echo "<pre>", print_r($results), "</pre>";
		echo "</section>";
	}
?>