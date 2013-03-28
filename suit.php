<?php

class Suit
{
	const Clubs = 0;
	const Diamonds = 1;
	const Hearts = 2;
	const Spades = 3;

	private $suit;

	public function __construct($suit) {
		$this->suit = $suit;
	}

	public function full_value() {
		return $this->suit;
	}

	public function __toString() {
		#return (string)$this->suit;
		return (string)$this->fancy_key();
	}
	
	public function fancy_key() {
		$Hearts = "&hearts;";
		$Spades = "&spades;";
		$Diamonds = "&diams;";
		$Clubs = "&clubs;";
		$tmp = "Diamonds";
		$tmp = $this->suit;
		return $$tmp;
	}

}

?>
