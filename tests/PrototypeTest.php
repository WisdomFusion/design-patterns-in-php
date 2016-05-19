<?php
namespace Tests;

use DesignPatterns\Creational\Prototype\BookPrototype;
use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;

class PrototypeTest extends \PHPUnit_Framework_TestCase
{
    public function getPrototypies()
    {
        return array(
            'foo' => new FooBookPrototype(),
            'bar' => new BarBookPrototype()
        );
    }

    public function testCreation(BookPrototype $prototype)
    {
        var_dump($prototype);
        $book = clone $prototype;
        $book->setTitle('Mastering PHP Design Patterns');

        var_dump($book);
        var_dump($book instanceof BookPrototype ? 'true' : 'false');
    }

    public function test()
    {
        echo '<h2>Prototype Design Pattern</h2>';
        $prototype = $this->getPrototypies();
        $this->testCreation($prototype['foo']);
    }
}