<?php
	function __autoload($class_name) {
		require __DIR__  . DIRECTORY_SEPARATOR .  'inc'. DIRECTORY_SEPARATOR . $class_name . '.php';
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Javascript unpacker testpage</title>
		<meta name="description" content="Unpacker for JavaScript files that were packed with Dean Edwards JavaScript's Packer.">
		<meta name="author" content="Recep Karadas">
	</head>
	<body>
		<h1>Javascript unpacker testpage</h1>
		<form method="POST">
			<div style="padding:10px;background:#efefef;display:inline-block;">
			<?php
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					$jsu = new JavaScriptUnpacker();
			?>
				<h4>Result: </h4>
			<?php
					echo $jsu->Unpack($_POST["userInput"]);
				}else{
			?>			
				<label for="userInput">Put in your packed javascript:</label><br />
				<textarea type="text" name="userInput" rows="10" cols="50" ></textarea><br />
				<input type="submit" value="submit" style="float:right"/>
			<?php	
				}
			?>
			</div>
		</form>
	</body>
</html>