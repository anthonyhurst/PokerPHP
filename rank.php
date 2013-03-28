<?php

class Rank {
	const Two = 0;
	const Three = 1;
	const Four = 2;
	const Five = 3;
	const Six = 4;
	const Seven = 5;
	const Eight = 6;
	const Nine = 7;
	const Ten = 8;
	const Jack = 9;
	const Queen = 10;
	const King = 11;
	const Ace = 12;
	
	private $rank;

	public function __construct($rank) {
		$this->rank = $rank;
	}
	
	public function full_value() {
		return $this->rank;
	}

	public function __toString() {
		#return (string)$this->rank;
		return (string)$this->fancy_key();
	}
	
	public function string_to_number($str) {
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

	public function fancy_key() {
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
