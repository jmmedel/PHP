<?php

require 'Item.php';

$my_item = new Item();
$my_item->name = 'An example';

$item2 = new Item();
$item2->name = 'Another example';

echo $my_item->getName(), " ", $item2->getName();
