<?

	//The super cool but often hated switch.
	switch($username)
	{
		case 'skidvis':
			$greeting = "All hail, ";
			break;
		case 'lucifer':
			$greeting = "the hell?";
			break;
		default:
			$greeting = "Wasup, ";
			break;
	}

	//The sneaky 1-line ternary thingamabob..
	$greeting = $username == "joe black" ? "The deadly " : "Hey there, ";

