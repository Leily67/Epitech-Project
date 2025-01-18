<?php

class Pangolin
{
    private string $_name;

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function correct($arcanist): void
    {
        $reflection = new ReflectionClass($arcanist);

        // Test 0 : La classe Arcaniste existe et est instantiable.
        echo $reflection->isInstantiable() ? "Test 0 : Good !\n" : "Test 0 : KO.\n";

        // Test 1 : La classe Arcaniste implémente l’interface iPerso.
        $interfaces = $reflection->getInterfaceNames();
        echo in_array('iPerso', $interfaces) ? "Test 1 : Good !\n" : "Test 1 : KO.\n";

        // Test 2 : La classe Arcaniste étend aUnit.
        echo $reflection->getParentClass() && $reflection->getParentClass()->getName() === 'aUnit'
            ? "Test 2 : Good !\n"
            : "Test 2 : KO.\n";

        // Test 3 : La classe aUnit ne doit pas être instanciable.
        $aUnitReflection = new ReflectionClass('aUnit');
        echo !$aUnitReflection->isInstantiable() ? "Test 3 : Good !\n" : "Test 3 : KO.\n";
    }
}
