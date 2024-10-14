<?php 
require_once 'Animal.php';

//  creer une nouvelle classe a partir d'une autre classe
// reference : https://www.w3schools.com/php/keyword_extends.asp 
class Pet extends Animal {
    public string $name = '';
    // reference : https://www.phparch.com/2022/10/the-php-datetime-class/
    public DateTime $birthday;
    public int $age = 0;

    public function setProp(string $type): void {
        parent::setProp($type);
    }

    public function setAdditionalProp(string $name, string $birthday): void {
        $this->name = $name;
        $this->birthday = new DateTime($birthday);
        $this->age = $this->calculateAge();
    }

    public function calculateAge(): int {
        $today = new DateTime();
        // Calcul l'age
        return $today->diff($this->birthday)->y;
    }

    public function getProp(): array {
        return [
            'name' => $this->name,
            'birthday' => $this->birthday->format('Y-m-d'),
            'age' => $this->age,
            'type' => $this->type
        ];
    }
}

