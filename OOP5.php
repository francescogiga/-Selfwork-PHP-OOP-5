<?php

abstract class Category {
    abstract public function getMyCategory();
}

class Attualita extends Category {
    public function getMyCategory() {
        echo "Attualità\n";
    }
}

class Sport extends Category {
    public function getMyCategory() {
        echo "Sport\n";
    }
}

class Gossip extends Category {
    public function getMyCategory() {
        echo "Gossip\n";
    }
}


class Storia extends Category {
    public function getMyCategory() {
        echo "Storia\n";
    }
}


$categories = [
    new Attualita(),
    new Sport(),
    new Gossip(),
    new Storia()
];

foreach ($categories as $cat) {
    $cat->getMyCategory();
}

?>
