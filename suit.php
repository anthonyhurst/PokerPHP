<?php

class Suit
{
	const Clubs = 0;
	const Diamonds = 1;
	const Hearts = 2;
	const Spades = 3;

	private $suit;

	public function __construct($suit)
	{
		$this->suit = $suit;
	}

	public function __toString()
	{
		return (string)$this->suit;
	}

}

?>
