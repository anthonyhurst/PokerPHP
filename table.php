<?php

require_once("dealer.php");

class Table
{

	private $dealer;

	public function __construct($players)
	{
		$this->dealer = new Dealer($players);
	}

}

?>
