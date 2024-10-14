<?php
// Creer une methode de base dans la classe parent, mais c'est aux classes enfants de decider comment cette methode fonctionne exactement
// reference : https://www.w3schools.com/php/php_oop_classes_abstract.asp 
abstract class Animal {
    protected string $type = '';

    public function setProp(string $type): void {
        $this->type = $type;
    }

    public function getProp(): array {
        return ['type' => $this->type];
    }
}



