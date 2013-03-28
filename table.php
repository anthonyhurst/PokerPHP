<?php

require_once("dealer.php");

class Table {

	public $dealer;
	public $community_cards;

	public function __construct($players) {
		$this->dealer = new Dealer($players, $this);
	}

	public function give_card($card) {
		$this->community_cards[] = $card;
	}

}

?>
