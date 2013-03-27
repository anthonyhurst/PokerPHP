<?php

class Rank
{
	const Ace = 0;
	const Two = 1;
	const Three = 2;
	const Four = 3;
	const Five = 4;
	const Six = 5;
	const Seven = 6;
	const Eight = 7;
	const Nine = 8;
	const Ten = 9;
	const Jack = 10;
	const Queen = 11;
	const King = 12;
	
	private $rank;

	public function __construct($rank)
	{
		$this->rank = $rank;
	}

	public function __toString()
	{
		#return (string)$this->rank;
		return (string)$this->fancy_key();
	}
	
	public function string_to_number($str)
	{
		switch($str) {
			case "Two":
				return 2;
			case "Three":
				return 3;
			case "Four":
				return 4;
			case "Five":
				return 5;
			case "Six":
				return 6;
			case "Seven":
				return 7;
			case "Eight":
				return 8;
			case "Nine":
				return 9;
			case "Ten":
				return 10;
			default:
				return null;

		}
	}

	public function fancy_key()
	{
		$tmp = $this->rank;
		$numeric = $this->string_to_number($tmp);
		if($numeric != null)
		{
			return $numeric;
		}
		return substr($tmp, 0, 1);
			
	}
}

?>
