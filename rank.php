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
		return (string)$this->rank;
	}
}

?>
