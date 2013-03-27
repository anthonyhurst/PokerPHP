<?php

require_once("dealer.php");

class Table
{

	public $dealer;

	public function __construct($players)
	{
		$this->dealer = new Dealer($players);
	}

}

?>
