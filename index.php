<?php 

// Class Animal
require_once 'Class/Animal.php';

// Initialise la class anonyme
$animal = new class extends Animal {};
$animal->setProp("Chien");

echo "<h2>Type d'Animal :</h2>";
echo "<pre>";
var_dump($animal->getProp());
echo "</pre>";

print_r($animal);

echo "<hr>";

// Class Pet 

require_once 'Class/Pet.php';
require_once 'Class/Owner.php';

$pet1 = new Pet();
$pet1->setProp("Chat");
$pet1->setAdditionalProp("Nugget", "2022-03-01");

$pet2 = new Pet();
$pet2->setProp("Chien");
$pet2->setAdditionalProp("Pickle", "2022-03-01");

echo "<h2>Nom de l'animal et Date de naissance :</h2>";
echo "<pre>";
var_dump($pet1->getProp());
var_dump($pet2->getProp());
echo "</pre>";

print_r($pet1);
print_r($pet2);

echo "<hr>";

// Class Owner

require_once 'Class/Owner.php';

$owner1 = new Owner("Bob", "1234", "H1H1H1", "456", "abc@gmail.com");
$owner2 = new Owner("Marie", "456", "H2H2H2", "789", "def@gmail.com");

echo "<h2>Information du propriétaire :</h2>";
echo "<pre>";
var_dump($owner1->getProp());
var_dump($owner2->getProp());
echo "</pre>";

print_r($owner1);
print_r($owner2);

