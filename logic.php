	<?php
	
		//select a random item from an array and return it
		function getRandom($array){
			$max = count($array)-1;
			return $array[rand(0,$max)];
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
				//$max=count($wordlist)-1;
				//$word=$wordlist[rand(0,$max)];
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
		
		// add a random symbol to end of a random word
		$symbols=["@","#","%","&","!","*","$"];
		if ($symbol){
			$selectedSymbol = getRandom($symbols);
			$symWord = getRandom($selectedWords).$selectedSymbol;
			echo $symWord;
			
		}
		
		$numbers=["2","4","6","8","10"];  //or I could just get a random number
		if ($number){
		
		}
		
	$password = implode(" ", $selectedWords);  //the final password
		
	?>
	