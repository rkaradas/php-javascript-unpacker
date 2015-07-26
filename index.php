<?php
	function __autoload($class_name) {
		require __DIR__  . DIRECTORY_SEPARATOR .  'inc'. DIRECTORY_SEPARATOR . $class_name . '.php';
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Javascript Unpacker</title>
		<meta name="description" content="Unpacker for JavaScript files that were packed with Dean Edwards JavaScript's Packer.">
		<meta name="author" content="Recep Karadas">
	</head>
	<body>
		
		<form method="POST">
<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$jsu = new JavaScriptUnpacker();
		echo $jsu->Unpack($_POST["userInput"]);
	}else{
?>			
			<textarea type="text" name="userInput" ></textarea>
			<input type="submit" value="submit"/>
<?php	
	}
?>
		</form>
	</body>
</html>