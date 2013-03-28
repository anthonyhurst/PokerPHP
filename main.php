<?php

//this is just to test demostrate capabilities.

require_once("rank.php");
require_once("suit.php");
require_once("card.php");
require_once("player.php");
require_once("dealer.php");
require_once("table.php");
require_once("hand.php");

$player1 = new Player("Anthony");
$player2 = new Player("Jon");
$player3 = new Player("Steve");
$player4 = new Player("Joe");

function cards_left($table)
{
	print "Cards left: " . count($table->dealer->get_deck()) . "<br/>\n";
}

$players = array($player1, $player2, $player3, $player4);
$table = new Table($players);
cards_left($table);
$table->dealer->deal();
foreach($players as $player)
{
	echo $player . "<br/>\n";
}
cards_left($table);

echo "<br/>\n";

$table->dealer->flop();

echo "The flop: ";
foreach($table->community_cards as $card)
{
	echo $card;
}
echo "<br/>\n";

cards_left($table);

$table->dealer->turn();

echo "The turn: ";
foreach($table->community_cards as $card)
{
	echo $card;
}
echo "<br/>\n";

cards_left($table);


$table->dealer->river();

echo "The river: ";
foreach($table->community_cards as $card)
{
	echo $card;
}
echo "<br/>\n";


cards_left($table);

$hands = array("HighCard");
foreach($players as $player) {
	foreach($hands as $hand) {
		$cards = array_merge($table->community_cards, $player->get_cards());
		$h = new $hand($cards);
		if($h->has_hand()) {
			$power =  $h->get_power();
			$sub =  $h->get_sub_power();
			echo "$player has $hand with power=$power and sub=$sub<br/>\n";
		}
	}
}


?>
