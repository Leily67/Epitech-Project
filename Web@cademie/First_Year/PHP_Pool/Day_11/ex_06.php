<?php

class Pangolin
{
    private string $_name;

    public function __construct(string $name)
    {
        $this->_name = $name;
    }

    public function correct(array $my_classes, array $namespaces): void
    {
        foreach ($my_classes as $class) {
            $reflection = new ReflectionClass($class);

            // Test 0 : Toutes les classes font partie d’au moins un namespace fourni.
            $namespace = $reflection->getNamespaceName();
            echo in_array($namespace, $namespaces) ? "Test 0 : Good !\n" : "Test 0 : KO.\n";

            // Test 1 : Classes finales, non clonables, pas d’héritage ni d’interfaces.
            echo $reflection->isFinal() ? "Test 1 : Good !\n" : "Test 1 : KO.\n";
            echo !$reflection->isCloneable() ? "Test 1 : Good !\n" : "Test 1 : KO.\n";
            echo !$reflection->getParentClass() ? "Test 1 : Good !\n" : "Test 1 : KO.\n";
            echo empty($reflection->getInterfaceNames()) ? "Test 1 : Good !\n" : "Test 1 : KO.\n";

            // Test 2 : Les classes ont les mêmes attributs et méthodes.
            $attributes = $reflection->getProperties();
            $methods = $reflection->getMethods();

            foreach ($my_classes as $other_class) {
                $other_reflection = new ReflectionClass($other_class);

                $other_attributes = $other_reflection->getProperties();
                $other_methods = $other_reflection->getMethods();

                $same_attributes = count($attributes) === count($other_attributes);
                $same_methods = count($methods) === count($other_methods);

                echo $same_attributes && $same_methods ? "Test 2 : Good !\n" : "Test 2 : KO.\n";
            }
        }
    }
}
