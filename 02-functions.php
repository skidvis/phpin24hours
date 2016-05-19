<?

	//Helper methods

	function sendTheUsername($username){
		echo "You sent me " . $username;
	}

	function favoriteColor($color = "blue"){
		echo "You said " . $color . ", or it's blue.";
	}

	function getTheDate(){
		return date("Y-m-d H:i:s");
	}

	function addNumbers($number1 = 0, $number2 = 0){
		return $number1 + $number2;
	}
