<?php

class Player
{
	private $cards = array();
	public $name;
	
	public function __construct($name)
	{
		$this->name = $name;
	}

	public function giveCard($card)
	{
		$this->cards[] = $card;
	}

	public function getCards()
	{
		return $this->cards;
	}

	public function __toString()
	{
		$cards_str = "";
		foreach($this->cards as $card)
		{
			$cards_str .= (string)$card;
		}	
		return "$this->name has $cards_str";
	}

}

?>
