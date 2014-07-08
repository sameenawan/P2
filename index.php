
<!DOCTYPE html>
<html>
<head>

	<title>P2 XKCD Password Generator</title>
	<meta charset="utf-8">
	 <?php require 'logic.php'; ?>

</head>

<body>


<h2>Sameen's XKCD Password Generator</h2>
<p>Please use the below criteria to create a random secure password. It is found that XKCD passowrds are very secure and easy to remember. This app will generate a random password based on the following criteria you select.</p>


<?php



	echo "<form>";
	echo "<input type='hidden' name='generate' />";
		echo "<table>";

			echo "<tr>";
				echo "<td>How Many Words?</td>";
				echo "<td><input type='text' name='howManyWords' value='4'/></td>";
			echo "</tr>";

				echo "<td><div align='right'><input type='checkbox' name='includeCharacters' value='yes' checked/></div></td>";
				echo "<td>Include Characters in the Password?</td>";		

				echo "<td><div align='right'><input type='checkbox' name='includeNumbers' value='yes' checked/></div></td>";
				echo "<td>Include Numbers in the Password?</td>";		

			echo "<tr>";
				echo "<td colspan='2' align='right'><input type='submit' value='Generate Random Password'/></td>";
			echo "</tr>";	
					
		echo "</table>";
	echo "</form>";

?>

<p>The logic of an XKCD Password</p>
<img src="password_strength.png" alt = 'XKCD password generator comic'>



		
	</body>
</html>
