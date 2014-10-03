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
	
	//count has to be set to continue
	if(isset($_POST["count"])) {
		$count = $_POST["count"];
		if(($count > 9) || ($count < 1)){
			$password =  "Hey, stop trying to hack my form!"; //only 1-9 numbers allowed
		} else {
			//array to hold password words
			$selectedWords = [];   
	
			// randomly select wor ds from words.txt	
			if($wordlist= file("words.txt")){ 
				for ($i=0; $i < $count; $i++){
					$selectedWords[$i]=getRandom($wordlist);  
				}
			}

			// convert first letter to uppercase
			if($uppercase){
				foreach($selectedWords as $i => $word){
					$selectedWords[$i]= ucfirst($word);
				}
			}
	
			$key=array_rand($selectedWords);
			$symbols=["@","#","%","&","!","*","$","?"];		
			// add a random symbol to randomly selected word
			if($symbol){
				$selectedSymbol = getRandom($symbols);  //get a random symbol
				$selectedWords[$key]= $selectedWords[$key].$selectedSymbol;
			}
	
			// add a random number from 1-100 to randomly selected word... or same word
			// as the symbol word to keep the two together for easier recall
			if($number){
				$selectedNumber=rand(0,100); //random number between 0-100
				$selectedWords[$key]=$selectedWords[$key].$selectedNumber;
			}
	
			$password = implode("-", $selectedWords);  //the final password
		}
	} else {
		$password = "Waiting to receive input...";  //initial state
	}
//?>
