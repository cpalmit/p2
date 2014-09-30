<?php

	//function that selects a random item from an array and returns it
	function getRandom($array){
		$max = count($array)-1;
		// use rtrim to remove extra white space from end of any words
		return rtrim($array[rand(0,$max)]);	
	}
	


	// Figure out what options were selected
	if(isset($_POST["uppercase"])) {
		$uppercase= true;
	} else {
		$uppercase = false;
	}
	
	if(isset($_POST["symbol"])) {
		$symbol = true;
	} else {
		$symbol = false;
	}
	
	if(isset($_POST["number"])) {
		$number = true; 
	} else {
		$number = false;
	}
	
	if(isset($_POST["count"])) {
		$count = $_POST["count"];
	} 

	//array to hold password words
	$selectedWords = [];   
	
	// randomly select words from words.txt	
	if ($wordlist= file("words.txt")){ 
		for ($i=0; $i < $count; $i++){
			//array_push($selectedWords,$word);
			$selectedWords[$i]=getRandom($wordlist);  
		}
	}

	// convert first letter to uppercase
	if ($uppercase){
		foreach($selectedWords as $i => $word){
			$selectedWords[$i]= ucfirst($word);
		}
	}
	
	// add a random symbol to end of first word
	$symbols=["@","#","%","&","!","*","$"];
	if ($symbol){
		$selectedSymbol = getRandom($symbols);  //get a random symbol
		//$symWord = getRandom($selectedWords).$selectedSymbol; // add symbol to random selected word
		$selectedWords[0]=$selectedWords[0].$selectedSymbol;
	}
	
	// add a random number from 1-100 to end of first word
	if ($number){
		$selectedNumber=rand(0,100);  //random number between 0-100
		$selectedWords[0]=$selectedWords[0].$selectedNumber;
	}
	
$password = implode("-", $selectedWords);  //the final password
	
?>
