<?php

// check if form has been submitted
if (isset($_GET['generate'])) {
	// how many words requested - default value is 4
	$howManyWords=$_GET['howManyWords'];
	// check if we should include special characters - default value is true
	$includeCharacters=$_GET['includeCharacters'];
	// check if we should include numbers - default value is true
	$includeNumbers=$_GET['includeNumbers'];







	// store the dictionary file into an array
	$dictionary = file('dictionary.txt');

	// pull a random key from the dictionary array
	$randomKey = array_rand($dictionary, $howManyWords);

	// loop over the number of words requested
	for ($i=0;$i<$howManyWords;$i++) {
			$randomStr .= ($dictionary[$randomKey[$i]]);
	}
	if ($includeCharacters=="yes") {
		// pull random digit or symbol from this string
		$characters="!@#$%^&*()_+";
		$randomChar = $characters[rand(0, strlen($characters)-1)];
		$randomStr.=$randomChar;
	}

	if ($includeNumbers=="yes") {
		// pull random number from this string
		$characters="1234567890";
		$randomChar = $characters[rand(0, strlen($characters)-1)];
		$randomStr.=$randomChar;
	}

	// output
	echo $randomStr;
} 
