<?php
include_once "./autoload.php";
$fireDwarf = new Classes\Units\Unit(100, 15, 1, new Classes\Races\Dwarf(), new Classes\Elements\Fire());
$corruptElf = new Classes\Units\Unit(100, 10, 5, new Classes\Races\Elf(), new Classes\Elements\Corruption());
echo $fireDwarf->toString();
echo $corruptElf->toString();